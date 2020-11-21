<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatelevelableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levelable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('level_id');
            $table->bigInteger('levelable_id');
            $table->string('levelable_type');
            $table->timestamps();
            $table->index(['levelable_id', 'levelable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levelable');
    }
}
