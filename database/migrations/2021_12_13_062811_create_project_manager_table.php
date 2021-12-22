<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_manager', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->string('project_type');
            $table->string('project_name');
            $table->string('project_leader')->nullable();
            $table->string('project_member')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('cost')->nullable();
            $table->string('client')->nullable();
            $table->string('project_stage')->nullable();
            $table->string('project_status')->nullable();
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
        Schema::dropIfExists('project_manager');
    }
}
