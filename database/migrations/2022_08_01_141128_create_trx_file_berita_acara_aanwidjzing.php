<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxFileBeritaAcaraAanwidjzing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_file_berita_acara_aanwidjzing', function (Blueprint $table) {
            $table->bigInteger('berita_acara_id')->autoIncrement();
            $table->integer('aanwidjzing_id')->nullable();
            $table->string('file_berita_acara')->nullable();
            $table->string('created_by', 11)->nullable();
            $table->string('updated_by', 11)->nullable();
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
        Schema::dropIfExists('trx_file_berita_acara_aanwidjzing');
    }
}
