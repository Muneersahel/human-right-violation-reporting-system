<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name');
            $table->string('director');
            $table->string('address');
            $table->string('mobile_no');
            $table->string('fax_no');
            $table->string('email');
            $table->string('region');
            $table->string('district');
            $table->string('ward');
            $table->string('street');
            $table->string('remarks');
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
        Schema::dropIfExists('centers');
    }
}
