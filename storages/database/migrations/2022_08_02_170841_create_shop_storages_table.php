<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_storages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('province_id');
            $table->integer('city_id');
            $table->integer('zone_id');
            $table->text('location');
            $table->boolean('status');
            $table->text('description');
            $table->string('manager');
            $table->integer('manager_id');
            $table->integer('meterage');
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
        Schema::dropIfExists('shop_storages');
    }
}
