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
        Schema::create('formatos_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_formatos');
            $table->unsignedBigInteger('id_productos');
            $table->float('precio');

            $table->foreign('id_formatos')->references('id')->on('formatos')->onDelete('cascade');
            $table->foreign('id_productos')->references('id')->on('productos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formatos_productos');
    }
};
