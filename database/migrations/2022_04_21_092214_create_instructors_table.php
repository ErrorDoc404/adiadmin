<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->integer('black_belt_id');
            $table->string('training_start')->nullable();
            $table->string('teaching_start')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('image_url')->nullable();
            $table->string('branch')->nullable();
            $table->string('main_instructor')->default('no');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructors');
    }
}
