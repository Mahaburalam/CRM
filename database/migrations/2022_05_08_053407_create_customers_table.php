<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('cus_id')->nullable();
            $table->string('cus_name')->nullable();
            $table->string('cus_f_name')->nullable();
            $table->string('cus_m_name')->nullable();
            $table->string('cus_contact_no')->nullable();
            $table->string('cus_segment')->nullable();
            $table->string('cus_nid')->nullable();
            $table->string('cus_division')->nullable();
            $table->string('cus_district')->nullable();
            $table->string('cus_area')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
