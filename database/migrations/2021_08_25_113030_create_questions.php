<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('questionText');
            $table->string('type');
            $table->string('opt1')->nullable();
            $table->string('opt2')->nullable();
            $table->string('opt3')->nullable();
            $table->string('opt4')->nullable();
            $table->integer('correctOpt')->nullable();
            $table->string('answer')->nullable();
            $table->integer('grade')->nullable();
            $table->string('lesson')->nullable();
            $table->integer('chapter')->nullable();
            $table->integer('section')->nullable();
            $table->integer('page')->nullable();
            $table->integer('level')->nullable();
            $table->string('subject')->nullable();
            $table->string('source')->nullable();
            $table->string('author')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
