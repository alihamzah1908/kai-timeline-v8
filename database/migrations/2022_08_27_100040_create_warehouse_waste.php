<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseWaste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_waste', function (Blueprint $table) {
            $table->bigIncrements('warehouse_waste_id')->autoIncrement();
            $table->date('tanggal')->nullable();
            $table->text('uraian')->nullable();
            $table->string('proses_pengangkutan')->nullable();
            $table->string('harga_kontrak', 100)->nullable();
            $table->string('realisasi_qty', 100)->nullable();
            $table->string('realisasi_penjualan', 100)->nullable();
            $table->string('total_penjualan', 100)->nullable();
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
        Schema::dropIfExists('warehouse_waste');
    }
}
