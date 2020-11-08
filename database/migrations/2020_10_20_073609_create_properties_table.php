<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('offer_id')->index();
            $table->unsignedBigInteger('district_id')->index();
            $table->unsignedBigInteger('thana_id')->index();
            $table->unsignedBigInteger('region_id')->index();
            $table->float('amount_of_land_en')->nullable();
            $table->float('amount_of_land_bn')->nullable();
            $table->string('near_by_en')->nullable();
            $table->string('near_by_bn')->nullable();
            $table->integer('minimum_price_en')->nullable();
            $table->integer('minimum_price_bn')->nullable();
            $table->string('road_en')->nullable();
            $table->string('road_bn')->nullable();
            $table->string('house_en')->nullable();
            $table->string('house_bn')->nullable();
            $table->string('floor_en')->nullable();
            $table->string('floor_bn')->nullable();
            $table->string('flat_space_en')->nullable();
            $table->string('flat_space_bn')->nullable();
            $table->string('no_of_bedroom_en')->nullable();
            $table->string('no_of_bedroom_bn')->nullable();
            $table->integer('rent_per_month_en')->nullable();
            $table->integer('rent_per_month_bn')->nullable();
            $table->string('rent_from_month')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_bn')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('offer_id')->references('id')->on('offers');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('thana_id')->references('id')->on('thanas');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
