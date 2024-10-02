<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $departure
 * @property string|null $provider
 * @property string|null $destination_port
 * @property string|null $vessel
 * @property string|null $term
 * @property string|null $shipping_port
 * @property string|null $invoice_customer
 * @property int|null $branch_id
 * @property int $received
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VehicleParts> $vehicleParts
 * @property-read int|null $vehicle_parts_count
 * @method static \Database\Factories\ShipmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment query()
 */
	class Shipment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $username
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $image
 * @property string|null $phone
 * @property string $role
 * @property string $status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $shipment_id
 * @property string|null $input_date
 * @property string|null $buyer1
 * @property string|null $provider_name
 * @property string|null $origin_id
 * @property string|null $make_title
 * @property string|null $model_title
 * @property string|null $grade
 * @property string|null $chassis_model
 * @property string|null $chassis_number
 * @property string|null $veh_fuel
 * @property string|null $veh_trans
 * @property string|null $veh_traction
 * @property int|null $veh_km
 * @property int|null $veh_cc
 * @property string|null $veh_year
 * @property int|null $veh_month
 * @property string|null $veh_color
 * @property int|null $gross_weight
 * @property int|null $net_weight
 * @property int|null $veh_length
 * @property int|null $veh_height
 * @property int|null $veh_width
 * @property string|null $other_info
 * @property string|null $engine_type
 * @property string|null $engine_no
 * @property int|null $veh_doors
 * @property string|null $purchase_price
 * @property string|null $veh_steering
 * @property string|null $veh_condition
 * @property string|null $veh_status
 * @property int|null $branch_id
 * @property string|null $provider
 * @property string|null $vessel
 * @property string|null $invoice_number
 * @property int $veh_a_c
 * @property int $veh_p_s
 * @property int $veh_abs
 * @property int $veh_p_w
 * @property int $veh_srs
 * @property int $veh_r_spoiler
 * @property int $veh_cd
 * @property int $veh_tv
 * @property int $veh_navigation
 * @property int $veh_a_w
 * @property int $veh_leather_seats
 * @property int $veh_b_t
 * @property int $veh_radio
 * @property int $veh_back_tyre
 * @property int $power_mirror
 * @property int $back_camera
 * @property int $front_camera
 * @property int $veh_central_locking
 * @property int $veh_roof_rail
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Shipment $shipment
 * @method static \Database\Factories\VehiclePartsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleParts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleParts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleParts query()
 */
	class VehicleParts extends \Eloquent {}
}

