<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.vendor', function (Blueprint $table) {
            $table->bigInteger('vendor_id')->autoIncrement();
            $table->string('vendor_code')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('street')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('account_group')->nullable();
            $table->string('search_term')->nullable();
            $table->string('central_deletion_flag')->nullable();
            $table->string('purch_org')->nullable();
            $table->string('purch_org_descr')->nullable();
            $table->string('term_of_payment')->nullable();
            $table->string('delete_flag_for_purchasing_org')->nullable();
            $table->string('order_currency')->nullable();
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
        Schema::dropIfExists('vendor');
    }
}
