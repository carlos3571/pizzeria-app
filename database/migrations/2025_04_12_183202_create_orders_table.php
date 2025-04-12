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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->integer('branch_id');
            $table->decimal('total_price', 8, 2);
            $table->enum('status',['pendiente','en_preparacion','listo','entregado']);
            $table->enum('delivery_type',['en_local','a_domicilio']);
            $table->integer('delivery_person_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
