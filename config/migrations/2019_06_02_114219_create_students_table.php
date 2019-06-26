<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ogr_numarasi')->nullable();
            $table->string('ogr_adi');
            $table->string('ogr_soyadi');
            $table->string('ogr_telefon')->nullable();
            $table->string('ogr_sifre')->nullable();
            $table->string('ogr_devamsizlik')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->foreign('ogr_numarasi')
                ->references('Numarasi')
                ->on('notlars')
                ->onUpdate('cascade');
            $table->foreign('ogr_adi')
                ->references('isim')
                ->on('notlars')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function(Blueprint $table) {
            $table->dropForeign('students_ogr_adi_foreign');
        });

        Schema::dropIfExists('students');
    }
}
