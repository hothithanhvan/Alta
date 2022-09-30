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
        Schema::create('number_days', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->integer('day');
            $table->integer('month');
            $table->integer('sl');
            $table->integer('dangcho');
            $table->integer('dasudung');
            $table->integer('boqua');
            $table->integer('tongso');
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
        Schema::dropIfExists('number_days');
    }
};
