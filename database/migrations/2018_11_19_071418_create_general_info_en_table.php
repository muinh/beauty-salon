<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralInfoEnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_info_en', function (Blueprint $table) {
            $table->increments('id');
            $table->text('company_desc_short');
            $table->text('company_desc_long');
            $table->text('privacy_policy_content');
            $table->text('cookie_policy_content');
            $table->text('company_philosophy_content');
            $table->text('company_history_content');
            $table->text('contacts_emails_content');
            $table->text('contacts_googlemaps_link');
            $table->text('salon_planner_content');
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
        Schema::dropIfExists('general_info_en');
    }
}
