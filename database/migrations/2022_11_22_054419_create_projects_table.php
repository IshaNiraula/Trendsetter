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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->bigInteger('cat_id')->unsigned();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('client_name')->nullable();
            $table->string('location')->nullable();
            $table->date('completed_at')->nullable();
            $table->string('project_value')->nullable();
            $table->string('manager')->nullable();
            $table->string('designer')->nullable();
            $table->string('brochure_link')->nullable();
            $table->integer('position')->nullable();
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('project_cats')->onDelete('cascade');
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
