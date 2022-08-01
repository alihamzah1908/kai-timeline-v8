<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxEvaluasiDokumenPenawaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_evaluasi_dokumen_penawaran', function (Blueprint $table) {
            $table->bigInteger('document_penawaran_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('peserta_tender')->nullable();
            $table->string('metode')->nullable();
            $table->string('penilaian_dokumen')->nullable();
            $table->string('penilaian_admin')->nullable();
            $table->string('penilaian_harga')->nullable();
            $table->date('tanggal_evaluasi_dokumen')->nullable();
            $table->date('tanggal_evaluasi_harga')->nullable();
            $table->date('tanggal_evaluasi_admin')->nullable();
            $table->string('file_evaluasi_dokumen')->nullable();
            $table->string('file_evaluasi_harga')->nullable();
            $table->string('file_evaluasi_teknis')->nullable();
            $table->string('keterangan_evaluasi_dokumen')->nullable();
            $table->string('keterangan_evaluasi_admin')->nullable();
            $table->string('keterangan_evaluasi_harga')->nullable();
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
        Schema::dropIfExists('trx_evaluasi_dokumen_penawaran');
    }
}
