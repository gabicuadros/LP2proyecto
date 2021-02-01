<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaborsocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laborsocials', function (Blueprint $table) {
            $table->bigIncrements(column:'id');
            $table->string(column:'nombres');
            $table->string(column:'categoria');
            $table->date(column:'finicial');
            $table->date(column:'ffinal');
            $table->string(column:'perfil');
            $table->string(column:'descripcion');
            $table->string(column:'competencias');
            $table->string(column:'oferta');
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
        Schema::dropIfExists('laborsocials');
    }
}
