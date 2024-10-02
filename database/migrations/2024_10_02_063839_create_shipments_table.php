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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->date('departure')->nullable();
            $table->string('provider')->nullable();
            $table->string('destination_port')->nullable();
            $table->string('vessel')->nullable();
            $table->string('term')->nullable();
            $table->string('shipping_port')->nullable();
            $table->string('invoice_customer')->nullable();
            $table->unsignedBigInteger('branch_id')->nullable();
            $table->boolean('received')->default(false);
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
