<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notlars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Numarasi')->nullable();
            $table->string('isim')->nullable();
            $table->string('soyisim')->nullable();
            $table->string('Fizik')->nullable();
            $table->string('Kimya')->nullable();
            $table->string('Matematik')->nullable();
            $table->string('Biyoloji')->nullable();
            $table->string('Edebiyat')->nullable();
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
        Schema::dropIfExists('notlars');
    }
}
