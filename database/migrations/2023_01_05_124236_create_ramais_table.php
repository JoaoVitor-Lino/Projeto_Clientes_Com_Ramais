<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ramais', function (Blueprint $table) {
            $table->id();
            $table->string('ramal', 5);
            $table->string('nomes', 15);
            $table->string('tipo', 3);
            $table->string('bina', 15);
            $table->foreignId('cliente_id')->constrained('clientes');
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
        Schema::dropIfExists('ramais');
    }
}
