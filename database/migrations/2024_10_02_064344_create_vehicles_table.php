<?php

use App\Models\Shipment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Shipment::class)->constrained()->cascadeOnDelete();
            $table->date('input_date')->nullable();
            $table->string('buyer1')->nullable();
            $table->string('provider_name')->nullable();
            $table->string('origin_id')->nullable();
            $table->string('make_title')->nullable();
            $table->string('model_title')->nullable();
            $table->string('grade')->nullable();
            $table->string('chassis_model')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('veh_fuel')->nullable();
            $table->string('veh_trans')->nullable();
            $table->string('veh_traction')->nullable();
            $table->string('veh_km')->nullable();
            $table->string('veh_cc')->nullable();
            $table->year('veh_year')->nullable();
            $table->string('veh_month')->nullable();
            $table->string('veh_color')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('net_weight')->nullable();
            $table->string('veh_length')->nullable();
            $table->string('veh_height')->nullable();
            $table->string('veh_width')->nullable();
            $table->text('other_info')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('veh_doors')->nullable();
            $table->string('purchase_price')->nullable();
            $table->string('veh_steering')->nullable();
            $table->string('veh_condition')->nullable();
            $table->string('veh_status')->nullable();
            $table->string('branch_id')->nullable();
            $table->string('provider')->nullable();
            $table->string('vessel')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('veh_a_c')->default(false);
            $table->string('veh_p_s')->default(false);
            $table->string('veh_abs')->default(false);
            $table->string('veh_p_w')->default(false);
            $table->string('veh_srs')->default(false);
            $table->string('veh_r_spoiler')->default(false);
            $table->string('veh_cd')->default(false);
            $table->string('veh_tv')->default(false);
            $table->string('veh_navigation')->default(false);
            $table->string('veh_a_w')->default(false);
            $table->string('veh_leather_seats')->default(false);
            $table->string('veh_b_t')->default(false);
            $table->string('veh_radio')->default(false);
            $table->string('veh_back_tyre')->default(false);
            $table->string('power_mirror')->default(false);
            $table->string('back_camera')->default(false);
            $table->string('front_camera')->default(false);
            $table->string('veh_central_locking')->default(false);
            $table->string('veh_roof_rail')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_parts');
    }
};
