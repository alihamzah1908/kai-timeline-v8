<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxPesertaTender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_peserta_tender', function (Blueprint $table) {
            $table->bigInteger('peserta_tender_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('pic_name')->nullable();
            $table->string('email_corporate')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('trx_peserta_tender');
    }
}
