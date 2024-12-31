<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('id_project')->autoIncrement();
            $table->string('project_name');
            $table->longText('description');
            $table->string('location');
            $table->date('year');
            $table->enum('category',['architecture', 'interior', 'foundation projects', 'building performance']);
            $table->string('size');
            $table->string('status');
            $table->string('client');
            $table->string('gambar');
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
        Schema::dropIfExists('projects');
    }
}
