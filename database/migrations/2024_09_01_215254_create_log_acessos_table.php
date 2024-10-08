<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogAcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_acessos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('hosts',15);
            $table->string('rota', 200);
            $table->string('dispositivo', 200);
            $table->string('log', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_acessos');
    }
}
