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
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->string('tendichvu');
            $table->string('thoigiancap');
            $table->string('hansd');
            $table->string('stt');
            $table->string('tenkh');
            $table->string('nguoncap');
            $table->string('email');
            $table->integer('trangthai')->default(0);
            $table->string('sdt');
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
        Schema::dropIfExists('numbers');
    }
};
