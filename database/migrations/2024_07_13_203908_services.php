<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('services',function (Blueprint $table){
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->string('image');
                $table->tinyInteger('featured')->default(0); //yes No
                $table->tinyInteger('status')->default(0);
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
         Schema::dropIfExists('services');
    }
};
