<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_no')->nullable();
            $table->date('date') ->nullable();
            $table->string('sales_executive')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('district')->nullable();
            $table->string('municipality_vdc')->nullable();
            $table->integer('ward')->nullable();
            $table->string('tole')->nullable();
            $table->integer('contact_no')->nullable();
            $table->string('occupation')->nullable();
            $table->string('email')->nullable();
            $table->string('source_of_enquiry')->nullable();
            $table->string('soe_specify')->nullable();
            $table->string('intrested_model')->nullable();
            $table->string('option')->nullable();
            $table->string('finalized_option')->nullable();
            $table->string('soe_color')->nullable();
            $table->string('showroom')->nullable();
            $table->string('showroom_specify')->nullable();
            $table->string('product')->nullable();
            $table->string('product_specify')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->integer('mfg_years')->nullable();
            $table->string('exchange_color')->nullable();
            $table->string('kms')->nullable();
            $table->float('expected_price')->nullable();
            $table->string('nature_of_visit')->nullable();
            $table->string('status')->nullable();
            
            $table->string('lost_to_competitor_brand')->nullable();
            $table->string('lost_to_codealer')->nullable();
            $table->string('finance_problem')->nullable();
            $table->string('Buying_scheduled_later')->nullable();
            $table->string('false_enquiry')->nullable();
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
