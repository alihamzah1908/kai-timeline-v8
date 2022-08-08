<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxBeritaAcaraHasilPelelangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_berita_acara_hasil_pelelangan', function (Blueprint $table) {
            $table->bigInteger('berita_acara_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('vendor_code')->nullable();
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
        Schema::dropIfExists('trx_berita_acara_hasil_pelelangan');
    }
}
