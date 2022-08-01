<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxDocumentPenawaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_document_penawaran', function (Blueprint $table) {
            $table->bigInteger('document_penawaran_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('peserta_tender')->nullable();
            $table->date('tanggal_submit_dokumen')->nullable();
            $table->date('tanggal_submit_teknis')->nullable();
            $table->date('tanggal_submit_harga')->nullable();
            $table->string('metode')->nullable();
            $table->string('file_dokumen')->nullable();
            $table->string('file_teknis')->nullable();
            $table->string('file_harga')->nullable();
            $table->string('file_berita_acara_dokumen')->nullable();
            $table->string('file_berita_acara_harga')->nullable();
            $table->string('keterangan_pemasukan_dokumen')->nullable();
            $table->string('keterangan_pemasukan_harga')->nullable();
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
        Schema::dropIfExists('trx_document_penawaran');
    }
}
