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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('white_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('social_media')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('phone_number_optional')->nullable();
            $table->string('email')->nullable();
            $table->string('email_optional')->nullable();
            $table->string('address')->nullable();
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
       Schema::dropIfExists('general_settings');
    }
};
