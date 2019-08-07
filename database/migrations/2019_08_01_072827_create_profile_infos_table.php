<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_info', function (Blueprint $table) {
            $table->string("user_id")->primary();
            $table->date("dob");
            $table->integer("gender");
            $table->string("race");
            $table->string("religion");
            $table->string("ic", 25);
            $table->string("passport", 25);
            $table->string("mobile_phone", 25);
            $table->string("home_phone", 25);
            $table->string("office_phone", 25);
            $table->string("address");
            $table->string("postcode");
            $table->string("city");
            $table->string("state");
            $table->string("country");
            $table->string("company_name");
            $table->string("position");
            $table->date("join_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_info');
    }
}
