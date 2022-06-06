<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('incident_id')->constrained('incidents')->onUpdate('cascade')->onDelete('cascade');
            $table->string('assistance_required');
            $table->string('follow_up');
            $table->string('way_findings');
            $table->string('way_forward');
            $table->string('validation_status');
            $table->string('validation_remarks',150);
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
        Schema::dropIfExists('validates');
        Schema::disableForeignKeyConstraints();
    }
}
