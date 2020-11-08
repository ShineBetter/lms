<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{

    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();;
            $table->string('date');
            $table->string('time');
            $table->unsignedTinyInteger('periodOfTime');
            $table->string('speacher');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
