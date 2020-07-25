<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_type');
            $table->string('line1');
            $table->string('line2')->nullable();
            $table->string('line3')->nullable();
            $table->string('line4')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->comment('postal code, zip codes')->nullable();
            $table->string('state', 6)->comment('state/province/territory')->nullable();
            $table->string('country', 3);
            $table->string('municipality')->comment('municipality, county')->nullable();
            $table->decimal('latitude', 8, 6, false)->nullable();
            $table->decimal('longitude', 9, 6, false)->nullable();
            $table->morphs('addressable');
            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
