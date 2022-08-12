<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxJaminanContract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.trx_jaminan_contract', function (Blueprint $table) {
            $table->bigIncrements('draft_contract_id')->autoIncrement();
            $table->integer('report_pbj_contract_id')->nullable();
            $table->integer('sp3_id')->nullable();
            $table->string('file_performance_contract')->nullable();
            $table->date('tanggal_submit')->nullable();
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
        Schema::dropIfExists('trx_jaminan_contract');
    }
}
