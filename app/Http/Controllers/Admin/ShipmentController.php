<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ShipmentsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\Vehicle;
use App\Services\ApiService;
use App\Utils\Constants;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use stdClass;

class ShipmentController extends Controller
{

    protected ApiService $apiService;
    public ?object $shippingData = null;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
        $this->shippingData = new stdClass();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ShipmentsDataTable $dataTable)
    {
        $shipments = Shipment::all();
        return $dataTable->render('admin.shipment.index', compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {

        if ($request->filled('booking-id')) {
            $this->shippingData = $this->apiService->getBookingData($request->input('booking-id'));
            session()->put(Constants::KEY_SHIPPING, $this->shippingData);

            return view('admin.shipment.create')->with('shippingData', $this->shippingData);
        }

        return view('admin.shipment.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            // Retrieve shipping data from session
            $this->shippingData = session()->get(Constants::KEY_SHIPPING);

            //dd($this->shippingData);

            // Check if shippingData exists
            if (!$this->shippingData || !isset($this->shippingData->shipment)) {
                throw new Exception('Shipping data is missing or invalid.');
            }

            // Start transaction
            DB::beginTransaction();

            // Extract shipment data
            $shipment = $this->shippingData->shipment;

            // Create a new shipment object
            $shipmentObject = new Shipment();

            // Set shipment properties
            $shipmentObject->id = $request->input('booking-id');
            $shipmentObject->departure = $shipment->departure;
            $shipmentObject->provider = $shipment->provider;
            $shipmentObject->destination_port = $shipment->destination_port;
            $shipmentObject->vessel = $shipment->vessel;
            $shipmentObject->term = $shipment->term;
            $shipmentObject->shipping_port = $shipment->shipping_port;
            $shipmentObject->invoice_customer = $shipment->invoice_customer;
            $shipmentObject->branch_id = $shipment->branch_id;
            $shipmentObject->received = $shipment->received;

            // Save the shipment
            $shipmentObject->save();

            // Iterate through vehicle data and save vehicle shipment
            foreach ($this->shippingData->data as $vehicleData) {
                $vehicleParts = new Vehicle();
                $vehicleParts->shipment_id = $shipmentObject->id;
                $vehicleParts->input_date = $vehicleData->input_date;
                $vehicleParts->buyer1 = $vehicleData->buyer1;
                $vehicleParts->provider_name = $vehicleData->provider_name;
                $vehicleParts->origin_id = $vehicleData->origin_id;
                $vehicleParts->make_title = $vehicleData->make_title;
                $vehicleParts->model_title = $vehicleData->model_title;
                $vehicleParts->grade = $vehicleData->grade;
                $vehicleParts->chassis_model = $vehicleData->chassis_model;
                $vehicleParts->chassis_number = $vehicleData->chassis_number;
                $vehicleParts->veh_fuel = $vehicleData->veh_fuel;
                $vehicleParts->veh_trans = $vehicleData->veh_trans;
                $vehicleParts->veh_traction = $vehicleData->veh_traction;
                $vehicleParts->veh_km = $vehicleData->veh_km;
                $vehicleParts->veh_cc = $vehicleData->veh_cc;
                $vehicleParts->veh_year = $vehicleData->veh_year;
                $vehicleParts->veh_month = $vehicleData->veh_month;
                $vehicleParts->gross_weight = $vehicleData->gross_weight;
                $vehicleParts->net_weight = $vehicleData->net_weight;
                $vehicleParts->veh_length = $vehicleData->veh_length;
                $vehicleParts->veh_height = $vehicleData->veh_height;
                $vehicleParts->veh_width = $vehicleData->veh_width;
                $vehicleParts->other_info = $vehicleData->other_info;
                $vehicleParts->engine_type = $vehicleData->engine_type;
                $vehicleParts->engine_no = $vehicleData->engine_no;
                $vehicleParts->veh_doors = $vehicleData->veh_doors;
                $vehicleParts->purchase_price = $vehicleData->purchase_price;
                $vehicleParts->veh_steering = $vehicleData->veh_steering;
                $vehicleParts->veh_condition = $vehicleData->veh_condition;
                $vehicleParts->veh_status = $vehicleData->veh_status;
                $vehicleParts->branch_id = $vehicleData->branch_id;
                $vehicleParts->provider = $vehicleData->provider;
                $vehicleParts->vessel = $vehicleData->vessel;
                $vehicleParts->invoice_number = $vehicleData->invoice_number;
                $vehicleParts->veh_a_c = $vehicleData->veh_a_c;
                $vehicleParts->veh_p_s = $vehicleData->veh_p_s;
                $vehicleParts->veh_abs = $vehicleData->veh_abs;
                $vehicleParts->veh_p_w = $vehicleData->veh_p_w;
                $vehicleParts->veh_srs = $vehicleData->veh_srs;
                $vehicleParts->veh_r_spoiler = $vehicleData->veh_r_spoiler;
                $vehicleParts->veh_cd = $vehicleData->veh_cd;
                $vehicleParts->veh_tv = $vehicleData->veh_tv;
                $vehicleParts->veh_navigation = $vehicleData->veh_navigation;
                $vehicleParts->veh_a_w = $vehicleData->veh_a_w;
                $vehicleParts->veh_leather_seats = $vehicleData->veh_leather_seats;
                $vehicleParts->veh_b_t = $vehicleData->veh_b_t;
                $vehicleParts->veh_radio = $vehicleData->veh_radio;
                $vehicleParts->veh_back_tyre = $vehicleData->veh_back_tyre;
                $vehicleParts->power_mirror = $vehicleData->power_mirror;
                $vehicleParts->back_camera = $vehicleData->back_camera;
                $vehicleParts->veh_central_locking = $vehicleData->veh_central_locking;
                $vehicleParts->veh_roof_rail = $vehicleData->veh_roof_rail;

                // Save vehicle shipment
                $vehicleParts->save();
            }

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();

            if ($e->getCode() == 23000) { // Integrity constraint violation code
                return redirect()->back()->with('error', 'Duplicate entry: This shipment is already in the database.');
            }

            return redirect()->back()->with('error', 'Error inserting data: ' . $e->getMessage());

        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            return redirect()->back()->with('error', 'Error inserting data: ' . $e->getMessage());
        }

        return redirect()->route('admin.dashboard')->with('success', 'Data inserted successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Shipment $shipment)
    {
        $vehicles = $shipment->vehicles;
        return view('admin.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
