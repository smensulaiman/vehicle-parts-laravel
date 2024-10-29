<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ShipmentsDataTable;
use App\Enums\ShipmentStatus;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Services\ApiService;
use App\Services\PartService;
use App\Services\VehicleService;
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
    protected VehicleService $vehicleService;
    protected PartService $partService;
    public ?object $shippingData = null;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
        $this->vehicleService = new VehicleService();
        $this->partService = new PartService();
        $this->shippingData = new stdClass();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ShipmentsDataTable $dataTable)
    {
        $totalShipment = Shipment::count();
        return $dataTable->render('admin.shipment.index', compact('totalShipment'));
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
            $this->shippingData = session()->get(Constants::KEY_SHIPPING);

            if (!$this->shippingData || !isset($this->shippingData->shipment)) {
                throw new Exception('Shipping data is missing or invalid.');
            }

            DB::beginTransaction();

            $shipment = $this->shippingData->shipment;

            $shipmentObject = new Shipment();

            $shipmentObject->departure = $shipment->departure;
            $shipmentObject->provider = $shipment->provider;
            $shipmentObject->destination_port = $shipment->destination_port;
            $shipmentObject->vessel = $shipment->vessel;
            $shipmentObject->term = $shipment->term;
            $shipmentObject->shipping_port = $shipment->shipping_port;
            $shipmentObject->invoice_customer = $shipment->invoice_customer;
            $shipmentObject->status = !empty($shipment->received) ? $shipment->received : ShipmentStatus::IN_TRANSIT->value;

            $shipmentObject->save();

            foreach ($this->shippingData->data as $vehicleData) {
                $vehicle = $this->vehicleService->storeVehiclesFromShipment($shipmentObject->id, $vehicleData);
                $this->partService->storeVehicleParts($vehicle->id);
            }

            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Error inserting data: ' . $e->getMessage());

        } catch (NotFoundExceptionInterface|ContainerExceptionInterface|\Throwable $e) {
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
