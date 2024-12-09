<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambars', function (Blueprint $table) {
            $table->unsignedBigInteger('id_image')->autoIncrement();
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id_project')->on('projects')->onDelete('cascade');
            $table->string('image_name')->nullable();
            $table->string('image_desc')->nullable();
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
        Schema::dropIfExists('gambars');
    }
}
