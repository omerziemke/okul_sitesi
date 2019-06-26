<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgretmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogretmens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ogrt_adi')->nullable();
            $table->string('ogrt_soyadi')->nullable();
            $table->string('ogrt_telefon')->nullable();
            $table->string('ogrt_sifre')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('ogretmens');
    }
}
