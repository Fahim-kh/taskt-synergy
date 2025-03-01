<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('slider',function (Blueprint $table){
            $table->id();
            $table->string('heading');
            $table->string('paragraph');
            $table->string('slider_img');
            $table->string('slug');
            $table->string('status');
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
         Schema::dropIfExists('slider');
    }
}
