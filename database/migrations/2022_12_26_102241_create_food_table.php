<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('food_item')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('pickup_date')->nullable();
            $table->string('pickup_address')->nullable();
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('contact_person')->nullable();
            $table->string('contact_person_mobile_number')->nullable();
            $table->boolean('status')->default('1')->comment('1 for Active, 0 for Delete');
            $table->boolean('food_status')->default('0')->comment('0 for Pending, 1 for request 2 for Accept');
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
        Schema::dropIfExists('food');
    }
};
