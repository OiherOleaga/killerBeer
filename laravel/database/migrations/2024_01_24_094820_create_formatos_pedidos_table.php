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
        Schema::create('formatos_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_formato_producto');
            $table->float('precio');

            $table->foreign('id_pedido')->references('id')->on('pedidos')->onDelete('cascade');
            $table->foreign('id_formato_producto')->references('id')->on('formatos_productos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formatos_pedidos');
    }
};
