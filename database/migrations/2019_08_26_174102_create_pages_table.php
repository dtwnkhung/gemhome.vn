<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pages');
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent')->nullable()->unsigned();
            $table->string('slug')->unique();
            $table->boolean('active')->default(1);
            $table->boolean('home')->default(0);
            $table->integer('sort')->default(0)->unsigned();
            $table->string('title');
            $table->string('html_title', 65)->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->longtext('content')->nullable();
            $table->string('head')->nullable();
            $table->longText('image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['active', 'parent', 'sort']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
