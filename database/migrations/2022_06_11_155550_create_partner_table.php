<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->default('slug-name');
            $table->string('title')->nullable();
            $table->longtext('description')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->string('metatitle')->nullable();
            $table->longtext('headerhtml')->nullable();
            $table->longtext('contenthtml')->nullable();
            $table->longtext('footerhtml')->nullable();
            $table->longtext('content')->nullable();
            $table->bigInteger('order')->default(0);
            $table->timestamps();
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
