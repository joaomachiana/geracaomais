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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('nome_vitima');
            $table->char('sexo_vitima')->nullable();
            $table->smallInteger(' provincia_id')->nullable();
            $table->string('distrito');
            $table->date('data_ocorrencia');
            $table->text('breve_descricao')->nullable();
            $table->string('contacto_denunciante');
            $table->string('contacto_vitima')->nullable();
            $table->string('informacao_adicional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
