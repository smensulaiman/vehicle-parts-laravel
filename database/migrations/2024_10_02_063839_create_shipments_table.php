<?php

use App\Enums\ShipmentStatus;
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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();

            // Shipment details
            $table->string('booking_id')->nullable();
            $table->string('provider')->nullable();
            $table->string('vessel')->nullable();

            // Shipping information
            $table->date('departure')->nullable();
            $table->string('shipping_port')->nullable();
            $table->string('destination_port')->nullable();
            $table->string('term')->nullable();

            // Financial details
            $table->string('invoice_customer')->nullable();
            $table->decimal('exchange_rate', 8, 2)->nullable()->default(1);

            // Cost breakdown
//            $table->decimal('vehicle_purchase', 10, 2)->nullable()->comment('Vehicle purchase price in Japan');
//            $table->decimal('cutting_cost', 10, 2)->nullable()->comment('Cost for disassembly or cutting');
//            $table->decimal('shipping_cost', 10, 2)->nullable()->comment('Shipping cost from Japan to Samoa');
//            $table->decimal('duty_fee', 10, 2)->nullable()->comment('Duty fee charged by customs in Samoa');
//            $table->decimal('import_tax', 10, 2)->nullable()->comment('Import tax based on shipment value');
//            $table->decimal('unloading_cost', 10, 2)->nullable()->comment('Cost for unloading at destination port');
//            $table->decimal('transport_cost', 10, 2)->nullable()->comment('Local transport cost within Samoa');
//            $table->decimal('miscellaneous_cost', 10, 2)->nullable()->comment('Other associated costs');

            // Status
            $table->enum('status', array_column(ShipmentStatus::cases(), 'value'))
                ->nullable()
                ->default(ShipmentStatus::IN_TRANSIT->value);

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
