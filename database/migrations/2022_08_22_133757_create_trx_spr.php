<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxSpr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_spr', function (Blueprint $table) {
            $table->bigIncrements('trx_spr_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('vendor_code')->nullable();
            $table->string('total_hari_kerja', 100)->nullable();
            $table->string('uncontrolled_days', 100)->nullable();
            $table->text('catatan_spr')->nullable();
            $table->string('file_jamlak')->nullable();
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
        Schema::dropIfExists('trx_spr');
    }
}
