<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectLeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_leader', function (Blueprint $table) {
            $table->bigIncrements('leader_id');
            $table->string('project_member');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('duration');
            $table->string('cost');
            $table->string('client');
            $table->string('project_stage');
            $table->string('project_status');
            $table->foreignId('project_manager_id')->nullable()->constrained('project_manager');
            $table->foreignId('users_id')->nullable()->constrained('users');
    
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
        Schema::dropIfExists('project_leader');
    }
}
