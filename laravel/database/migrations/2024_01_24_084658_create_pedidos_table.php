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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_cliente');
            $table->enum('estado', ['solicitado', 'preparacion', 'entrega', 'entregado'])->default('solicitado');
            $table->date('fecha_entrega');
            $table->float('precio');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
