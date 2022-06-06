<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('incident_id')->constrained('incidents')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->char('gender',7);
            $table->smallInteger('age');
            $table->string('tribe');
            $table->string('religion');
            $table->string('merital_status');
            $table->string('suspect_remarks');
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
        Schema::dropIfExists('suspects');
        Schema::disableForeignKeyConstraints();
    }
}
