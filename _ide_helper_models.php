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
 * @property string $name e.g, cutting cost, shipping cost
 * @property int $active 0: not active, 1: active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shipment> $shipments
 * @property-read int|null $shipments_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cost query()
 */
	class Cost extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $vehicle_id
 * @property int $part_name_id
 * @property string|null $barcode
 * @property int $quantity
 * @property string|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PartName $partName
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Sale> $sales
 * @property-read int|null $sales_count
 * @property-read \App\Models\Vehicle $vehicle
 * @method static \Database\Factories\PartFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Part newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Part newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Part query()
 */
	class Part extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $quantity
 * @property string|null $price
 * @property int $is_generic
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Part|null $part
 * @method static \Database\Factories\PartNameFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PartName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PartName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PartName query()
 */
	class PartName extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $quantity_sold
 * @property string $price_at_sale
 * @property string|null $comment
 * @property string $sold_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Part> $parts
 * @property-read int|null $parts_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sale query()
 */
	class Sale extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $booking_id
 * @property string|null $departure
 * @property string|null $provider
 * @property string|null $destination_port
 * @property string|null $vessel
 * @property string|null $term
 * @property string|null $shipping_port
 * @property string|null $invoice_customer
 * @property string|null $exchange_rate
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cost> $costs
 * @property-read int|null $costs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vehicle> $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Database\Factories\ShipmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Shipment query()
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
 * @property string $password
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
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
 * @property int $make_id
 * @property string $make_title
 * @property string $model_id
 * @property string $model_title
 * @property string|null $grade
 * @property string|null $chassis_model
 * @property string|null $chassis_number
 * @property string|null $veh_fuel
 * @property string|null $veh_trans
 * @property string|null $veh_traction
 * @property string|null $veh_km
 * @property string|null $veh_cc
 * @property string|null $veh_year
 * @property string|null $veh_month
 * @property string|null $veh_color
 * @property string|null $gross_weight
 * @property string|null $net_weight
 * @property string|null $veh_length
 * @property string|null $veh_height
 * @property string|null $veh_width
 * @property string|null $other_info
 * @property string|null $engine_type
 * @property string|null $engine_no
 * @property string|null $veh_doors
 * @property string|null $purchase_price
 * @property string|null $veh_steering
 * @property string|null $veh_condition
 * @property string|null $veh_status
 * @property string|null $branch_id
 * @property string|null $provider
 * @property string|null $vessel
 * @property string|null $invoice_number
 * @property string|null $veh_a_c
 * @property string|null $veh_p_s
 * @property string|null $veh_abs
 * @property string|null $veh_p_w
 * @property string|null $veh_srs
 * @property string|null $veh_r_spoiler
 * @property string|null $veh_cd
 * @property string|null $veh_tv
 * @property string|null $veh_navigation
 * @property string|null $veh_a_w
 * @property string|null $veh_leather_seats
 * @property string|null $veh_b_t
 * @property string|null $veh_radio
 * @property string|null $veh_back_tyre
 * @property string|null $power_mirror
 * @property string|null $back_camera
 * @property string|null $front_camera
 * @property string|null $veh_central_locking
 * @property string|null $veh_roof_rail
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Part> $parts
 * @property-read int|null $parts_count
 * @property-read \App\Models\Shipment $shipment
 * @method static \Database\Factories\VehicleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Vehicle query()
 */
	class Vehicle extends \Eloquent {}
}

