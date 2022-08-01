<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxKlasifikasiKonfirmasiNegosiasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_klasifikasi_konfirmasi_negosiasi', function (Blueprint $table) {
            $table->bigInteger('klasifikasi_id')->autoIncrement();
            $table->date('tanggal_kkn')->nullable();
            $table->string('hps_pagu')->nullable();
            $table->string('harga_negosiasi')->nullable();
            $table->string('file_berita_acara')->nullable();
            $table->string('file_memo_internal')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('trx_klasifikasi_konfirmasi_negosiasi');
    }
}
