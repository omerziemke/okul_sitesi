<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOgrenciler extends Migration{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogrenciler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ogr_numarasi')->nullable();
            $table->string('ogr_adi');
            $table->string('ogr_soyadi');
            $table->string('ogr_telofon')->nullable();
            $table->string('ogr_sifre')->nullable();
            $table->string('ogr_devamsizlik')->nullable();
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
        Schema::dropIfExists('ogrenciler');
    }
}
