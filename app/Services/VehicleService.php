<?php

namespace App\Services;

use App\Models\Vehicle;

class VehicleService
{
    public function storeVehiclesFromShipment($shipmentId, $vehicleData): Vehicle
    {
        $vehicle = new Vehicle();
        $vehicle->shipment_id = $shipmentId;
        $vehicle->input_date = $vehicleData->input_date;
        $vehicle->buyer1 = $vehicleData->buyer1;
        $vehicle->provider_name = $vehicleData->provider_name;
        $vehicle->origin_id = $vehicleData->origin_id;
        $vehicle->make_id = $vehicleData->make_id;
        $vehicle->make_title = $vehicleData->make_title;
        $vehicle->model_id = $vehicleData->model_id;
        $vehicle->model_title = $vehicleData->model_title;
        $vehicle->grade = $vehicleData->grade;
        $vehicle->chassis_model = $vehicleData->chassis_model;
        $vehicle->chassis_number = $vehicleData->chassis_number;
        $vehicle->veh_fuel = $vehicleData->veh_fuel;
        $vehicle->veh_trans = $vehicleData->veh_trans;
        $vehicle->veh_traction = $vehicleData->veh_traction;
        $vehicle->veh_km = $vehicleData->veh_km;
        $vehicle->veh_cc = $vehicleData->veh_cc;
        $vehicle->veh_year = $vehicleData->veh_year;
        $vehicle->veh_month = $vehicleData->veh_month;
        $vehicle->gross_weight = $vehicleData->gross_weight;
        $vehicle->net_weight = $vehicleData->net_weight;
        $vehicle->veh_length = $vehicleData->veh_length;
        $vehicle->veh_height = $vehicleData->veh_height;
        $vehicle->veh_width = $vehicleData->veh_width;
        $vehicle->other_info = $vehicleData->other_info;
        $vehicle->engine_type = $vehicleData->engine_type;
        $vehicle->engine_no = $vehicleData->engine_no;
        $vehicle->veh_doors = $vehicleData->veh_doors;
        $vehicle->purchase_price = $vehicleData->purchase_price;
        $vehicle->veh_steering = $vehicleData->veh_steering;
        $vehicle->veh_condition = $vehicleData->veh_condition;
        $vehicle->veh_status = $vehicleData->veh_status;
        $vehicle->branch_id = $vehicleData->branch_id;
        $vehicle->provider = $vehicleData->provider;
        $vehicle->vessel = $vehicleData->vessel;
        $vehicle->invoice_number = $vehicleData->invoice_number;
        $vehicle->veh_a_c = $vehicleData->veh_a_c;
        $vehicle->veh_p_s = $vehicleData->veh_p_s;
        $vehicle->veh_abs = $vehicleData->veh_abs;
        $vehicle->veh_p_w = $vehicleData->veh_p_w;
        $vehicle->veh_srs = $vehicleData->veh_srs;
        $vehicle->veh_r_spoiler = $vehicleData->veh_r_spoiler;
        $vehicle->veh_cd = $vehicleData->veh_cd;
        $vehicle->veh_tv = $vehicleData->veh_tv;
        $vehicle->veh_navigation = $vehicleData->veh_navigation;
        $vehicle->veh_a_w = $vehicleData->veh_a_w;
        $vehicle->veh_leather_seats = $vehicleData->veh_leather_seats;
        $vehicle->veh_b_t = $vehicleData->veh_b_t;
        $vehicle->veh_radio = $vehicleData->veh_radio;
        $vehicle->veh_back_tyre = $vehicleData->veh_back_tyre;
        $vehicle->power_mirror = $vehicleData->power_mirror;
        $vehicle->back_camera = $vehicleData->back_camera;
        $vehicle->veh_central_locking = $vehicleData->veh_central_locking;
        $vehicle->veh_roof_rail = $vehicleData->veh_roof_rail;

        $vehicle->save();

        return $vehicle;
    }

}
