<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousePart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_part', function (Blueprint $table) {
            $table->bigIncrements('warehouse_part_id')->autoIncrement();
            $table->string('pint')->nullable();
            $table->string('sloc', 100)->nullable();
            $table->string('material', 100)->nullable();
            $table->text('material_description')->nullable();
            $table->string('bun')->nullable();
            $table->string('unrestricted', 100)->nullable();
            $table->string('value_unrestricted')->nullable();
            $table->string('mtyp')->nullable();
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
        Schema::dropIfExists('warehouse_part');
    }
}
