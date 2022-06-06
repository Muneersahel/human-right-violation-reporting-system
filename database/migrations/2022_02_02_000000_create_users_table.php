<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();   
            $table->string('password');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('mobile_no')->unique();
            $table->char('gender',7);
            $table->date('birth_date');
            $table->string('human_office')->nullable();
            $table->string('role')->default('Customer'); 
            $table->string('reg_no')->nullable();
            $table->string('tribe');
            $table->string('religion');
            $table->string('merital_status');
            $table->string('region');
            $table->string('district');
            $table->string('ward');
            $table->string('street');
            $table->string('location_remarks');
            $table->string('user_image')->default('default_user.jpg');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}