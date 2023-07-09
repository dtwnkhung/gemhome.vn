<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAppUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('appusers');
        Schema::dropIfExists('appuser_permissions');
        Schema::create('appusers', function (Blueprint $table) {
            $table->bigIncrements('id');         
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->text('phone')->nullable();
            $table->string('image')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->timestamp('last_login')->useCurrent();
            $table->text('country')->nullable();
            $table->text('city')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('balance')->nullable()->default(0);
            $table->integer('status')->nullable()->default(1);
            $table->timestamp('email_verified_at')->nullable();                    
            $table->text('facebook')->nullable();
            $table->text('field_1')->nullable();            
            $table->text('field_2')->nullable();
            $table->rememberToken();
            $table->timestamps(); 
            $table->softDeletes();
        });

        Schema::create('appuser_permissions', function (Blueprint $table) {
            $table->bigIncrements('id');    
            $table->bigInteger('appuser_id')->nullable()->unsigned();
            $table->text('model_name')->nullable();   
            $table->bigInteger('model_id')->nullable()->unsigned();
            $table->integer('status')->default(1);
            $table->timestamp('active_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('end_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->text('description')->nullable();       
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
        Schema::dropIfExists('appusers');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('hocvien_package');
        Schema::dropIfExists('hocvien_packages');
        Schema::dropIfExists('hocvien_permission');
        Schema::dropIfExists('hocvien_permissions');
    }
}
