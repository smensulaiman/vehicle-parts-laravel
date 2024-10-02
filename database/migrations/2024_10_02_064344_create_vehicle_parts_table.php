<?php

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
        Schema::create('vehicle_parts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipment_id'); // Foreign key to shipments table
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
            $table->integer('veh_km')->nullable();
            $table->integer('veh_cc')->nullable();
            $table->year('veh_year')->nullable();
            $table->integer('veh_month')->nullable();
            $table->string('veh_color')->nullable();
            $table->integer('gross_weight')->nullable();
            $table->integer('net_weight')->nullable();
            $table->integer('veh_length')->nullable();
            $table->integer('veh_height')->nullable();
            $table->integer('veh_width')->nullable();
            $table->text('other_info')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('engine_no')->nullable();
            $table->integer('veh_doors')->nullable();
            $table->decimal('purchase_price', 10, 2)->nullable();
            $table->string('veh_steering')->nullable();
            $table->string('veh_condition')->nullable();
            $table->string('veh_status')->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('provider')->nullable();
            $table->string('vessel')->nullable();
            $table->string('invoice_number')->nullable();
            $table->boolean('veh_a_c')->default(false);
            $table->boolean('veh_p_s')->default(false);
            $table->boolean('veh_abs')->default(false);
            $table->boolean('veh_p_w')->default(false);
            $table->boolean('veh_srs')->default(false);
            $table->boolean('veh_r_spoiler')->default(false);
            $table->boolean('veh_cd')->default(false);
            $table->boolean('veh_tv')->default(false);
            $table->boolean('veh_navigation')->default(false);
            $table->boolean('veh_a_w')->default(false);
            $table->boolean('veh_leather_seats')->default(false);
            $table->boolean('veh_b_t')->default(false);
            $table->boolean('veh_radio')->default(false);
            $table->boolean('veh_back_tyre')->default(false);
            $table->boolean('power_mirror')->default(false);
            $table->boolean('back_camera')->default(false);
            $table->boolean('front_camera')->default(false);
            $table->boolean('veh_central_locking')->default(false);
            $table->boolean('veh_roof_rail')->default(false);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('shipment_id')->references('id')->on('shipments')->onDelete('cascade');
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
