<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelaksanaanPengadaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_jadwal_pelaksanaan', function (Blueprint $table) {
            $table->bigInteger('pelaksanaan_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->date('penjelasan_start_date')->nullable();
            $table->date('penjelasan_end_date')->nullable();
            $table->date('pemasukan_start_date')->nullable();
            $table->date('pemasukan_end_date')->nullable();
            $table->date('penawaran_start_date')->nullable();
            $table->date('penawaran_end_date')->nullable();
            $table->date('evaluasi_start_date')->nullable();
            $table->date('evaluasi_end_date')->nullable();
            $table->date('pengumuman_start_date')->nullable();
            $table->date('pengumuman_end_date')->nullable();
            $table->date('tandatangan_start_date')->nullable();
            $table->date('tandatangan_end_date')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('jadwal_pelaksanaan_pengadaan');
    }
}
