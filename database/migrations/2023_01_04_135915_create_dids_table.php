<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dids', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 20);
            $table->string('descricao', 25);
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
        Schema::table('ramais', function (Blueprint $table) {
            $table->foreignId('cliente_id')
            ->constrained()
            ->onDelete('cascade');
        });
    }
}
