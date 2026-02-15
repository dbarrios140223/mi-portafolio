<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');          // Ej: "Ingeniero en Sistemas - UVEG"
            $table->text('descripcion');      // Una breve reseña de lo que lograste
            $table->string('imagen_path');    // Aquí guardaremos la ruta de tu captura/PDF
            $table->string('link_verificacion')->nullable(); // Para el código de validador: 673669
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
};
