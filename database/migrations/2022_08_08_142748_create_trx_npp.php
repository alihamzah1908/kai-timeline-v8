<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxNpp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_npp', function (Blueprint $table) {
            $table->bigInteger('npp_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('no_pr')->nullable();
            $table->string('no_rab')->nullable();
            $table->string('no_justifikasi')->nullable();
            $table->string('tanggal_pr')->nullable();
            $table->string('tanggal_rab')->nullable();
            $table->string('tanggal_justifikasi')->nullable();
            $table->string('file_pr')->nullable();
            $table->string('file_rab')->nullable();
            $table->string('file_justifikasi')->nullable();
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
        Schema::dropIfExists('trx_npp');
    }
}
