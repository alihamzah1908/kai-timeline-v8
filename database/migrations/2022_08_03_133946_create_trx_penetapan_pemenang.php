<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxPenetapanPemenang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_penetapan_pemenang', function (Blueprint $table) {
            $table->bigInteger('pemenang_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('vendor_code')->nullable();
            $table->string('file_berita_acara')->nullable();
            $table->text('catatan')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('trx_penetapan_pemenang');
    }
}
