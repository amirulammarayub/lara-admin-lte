<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminAndStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_name');
            $table->string('admin_email')->unique();
            $table->string('admin_password');
            $table->rememberToken();
            $table->timestamps();
            $table->softdeletes();
        });

        Schema::create('staffs', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('staff_name');
            $table->string('staff_added_by');
            $table->string('staff_email')->unique();
            $table->string('staff_phone')->unique();
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
        Schema::dropIfExists('migrations');
        Schema::dropIfExists('users');
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('staffs');
        //
    }
}
