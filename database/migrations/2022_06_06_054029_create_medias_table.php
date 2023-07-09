<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('albums');
        Schema::dropIfExists('pictures');
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('slug')->default('slug-name');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('metatitle')->nullable();
            $table->longtext('headerhtml')->nullable();
            $table->longtext('contenthtml')->nullable();
            $table->longtext('footerhtml')->nullable();
            $table->longtext('content')->nullable();
            $table->bigInteger('order')->default(0);
            $table->timestamps();
            $table->index('slug');
        });
        Schema::create('pictures', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->bigInteger('album_id')->default(0);
            $table->string('slug')->default('slug-name');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('metatitle')->nullable();
            $table->longtext('headerhtml')->nullable();
            $table->longtext('contenthtml')->nullable();
            $table->longtext('footerhtml')->nullable();
            $table->longtext('content')->nullable();
            $table->bigInteger('order')->default(0);
            $table->timestamps();
            $table->index(['slug', 'album_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
        Schema::dropIfExists('pictures');
    }
}
