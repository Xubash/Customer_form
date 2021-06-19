<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->string('followup_date')->nullable()->default(null);
            $table->string('voice_of_customer')->nullable()->default(null);
            $table->string('next_contact_date')->nullable()->default(null);
            $table->string('referral')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->dropColumn('followup_date');
            $table->dropColumn('voice_of_customer');
            $table->dropColumn('next_contact_date');
            $table->dropColumn('referral');
        });
    }
}
