<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDraftRksFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.draft_rks_file', function (Blueprint $table) {
            $table->bigInteger('rks_id')->autoIncrement();
            $table->integer('sp3_id')->nullable();
            $table->string('file')->nullable();
            $table->date('tanggal_rks')->nullable();
            $table->string('created_by', 11)->nullable();
            $table->string('updated_by', 11)->nullable();
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
        Schema::dropIfExists('public.draft_rks_file');
    }
}
