<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('incident_number')->unique();
            $table->string('incident_source');
            $table->string('issue_type');
            $table->string('right_violated');
            $table->string('region');
            $table->string('district');
            $table->string('nearest_center');
            $table->string('ward');
            $table->string('street');
            $table->string('special_group');
            $table->string('photos');
            $table->string('video');
            $table->timestamp('date_time');
            $table->smallInteger('incident_status')->default(1);
            $table->string('incident_remarks');
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
        Schema::dropIfExists('incidents');
        Schema::disableForeignKeyConstraints();
 
    }
}
