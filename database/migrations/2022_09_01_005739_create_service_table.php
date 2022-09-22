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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('madichvu');
            $table->string('tendichvu');
            $table->string('mota');
            $table->string('trangthaihoatdong')->default('1');
            $table->integer('batdau');
            $table->integer('ketthuc');
            $table->integer('prefix');
            $table->integer('surfix');
            $table->boolean('reset');
            $table->dateTime('date');
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
        Schema::dropIfExists('services');
    }
};
