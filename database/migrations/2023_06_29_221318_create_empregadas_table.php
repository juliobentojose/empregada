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
        Schema::create('empregadas', function (Blueprint $table) {
            $table->id();
            $table->string('telefone');
            $table->string('sexo');
            $table->string('bi');
            $table->string('morada');
            $table->date('data_nascimento');
            $table->string('experiencia');
            $table->string('ano_trabalho');
            $table->string('foto');
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
        Schema::dropIfExists('empregadas');
    }
};
