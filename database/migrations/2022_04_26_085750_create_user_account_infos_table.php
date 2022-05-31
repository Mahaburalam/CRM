<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account_infos', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_id')->nullable();
            $table->string('ac_name')->nullable();
            $table->string('ac_status')->nullable();
            $table->string('ac_type')->nullable();
            $table->string('profit_status')->nullable();
            $table->string('kyc_status')->nullable();
            $table->string('ac_id')->nullable();
            $table->string('ac_balance')->nullable();
            $table->string('ac_dob')->nullable();
            $table->string('ac_limit_status')->nullable();
            $table->string('ac_more_info_1')->nullable();
            $table->string('ac_more_info_2')->nullable();
            $table->string('ac_more_info_3')->nullable();
            $table->string('ac_more_info_4')->nullable();
            $table->string('ac_more_info_5')->nullable();
            $table->string('ac_category')->nullable();
            $table->string('ac_sub_category')->nullable();
            $table->string('ac_sub_sub_category_1')->nullable();
            $table->string('ac_sub_sub_category_2')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('user_account_infos');
    }
}
