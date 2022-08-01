<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxAanwidjzing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_aanwidjzing', function (Blueprint $table) {
            $table->bigInteger('aanwidjzing_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('peserta_tender')->nullable();
            $table->string('kehadiran')->nullable();
            $table->string('file_berita_acara')->nullable();
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
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
        Schema::dropIfExists('trx_aanwidjzing');
    }
}
