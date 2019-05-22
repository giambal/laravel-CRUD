<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('displacement');
            $table->integer('max_speed');
            $table->timestamps();
        });

        DB::table('cars')->insert([
          "brand"=>"mercedes",
          "model"=>"class s",
          "displacement"=>2600,
          "max_speed"=>260
        ]);
        DB::table('cars')->insert([
          "brand"=>"bmw",
          "model"=>"series 6",
          "displacement"=>2600,
          "max_speed"=>280
        ]);
        DB::table('cars')->insert([
          "brand"=>"alfa romeo",
          "model"=>"giulia",
          "displacement"=>1800,
          "max_speed"=>190
        ]);
        DB::table('cars')->insert([
          "brand"=>"dacia",
          "model"=>"duster",
          "displacement"=>1600,
          "max_speed"=>160
        ]);
        DB::table('cars')->insert([
          "brand"=>"kia",
          "model"=>"sportage",
          "displacement"=>1900,
          "max_speed"=>190
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
