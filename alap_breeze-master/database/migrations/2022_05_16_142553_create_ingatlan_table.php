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
        Schema::create('ingatlan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategoria')->unsigned();
            $table->string('leiras',255);
            $table->date('hirdetesDatuma');
            $table->boolean('tehermentes')->default(true);
            $table->integer('ar');
            $table->string('kepUrl',255);

            $table->foreign('kategoria')->references('id')->on('kategoriak');
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
        Schema::dropIfExists('ingatlan');
    }
};
