<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserQuizTableAddScoreAndCorrectQuestionsCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_quiz', function (Blueprint $table) {
            $table->bigInteger('score')->default(0)->nullable();
            $table->bigInteger('correct_answers')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_quiz', function (Blueprint $table) {
            $table->dropColumn('score');
            $table->dropColumn('correct_answers');
        });
    }
}
