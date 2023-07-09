<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('category_project');
        Schema::dropIfExists('project_categories');
        Schema::dropIfExists('projects');
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->boolean('active')->default(1);
            $table->integer('sort')->default(0)->unsigned();
            $table->string('title');
            $table->string('html_title', 65)->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->longtext('content')->nullable();
            $table->string('head')->nullable();
            $table->longText('image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('project_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('category_project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_category_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
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
        Schema::dropIfExists('project_categories');
        Schema::dropIfExists('category_project');
    }
}
