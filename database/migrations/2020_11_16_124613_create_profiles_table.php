<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('parent_name')->nullable();
            $table->unsignedBigInteger('user_id');
//            $table->unsignedBigInteger('level_id')->nullable();
//            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->string('nationalNumber',10);
            $table->string('phone',20);
            $table->string('mobile',11);
            $table->bigInteger('date_of_birth');
            $table->text('address');
            $table->text('photo')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
//            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
