<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFortcastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forecasts', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('description',50);
            $table->dateTime('datetime');
            $table->tinyInteger('temp_max');
            $table->tinyInteger('temp_min');
            $table->tinyInteger('rain_chance');
            $table->foreignId('type_id')->constrained();
            $table->foreignId('city_id')->constrained();
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
        Schema::dropIfExists('forecasts');
    }
}
