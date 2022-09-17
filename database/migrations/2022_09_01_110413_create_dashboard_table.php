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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->integer('device_on')->default(0);
            $table->integer('device_off')->default(0);
            $table->integer('service_on')->default(0);
            $table->integer('service_off')->default(0);
            $table->integer('number_used')->default(0);
            $table->integer('number_wait')->default(0);
            $table->integer('number_pass')->default(0);
            $table->integer('number')->default(0);
            $table->string('time');
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
        Schema::dropIfExists('dashboards');
    }
};
