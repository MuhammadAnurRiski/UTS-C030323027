<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('full_name', 100);
            $table->string('position', 50);
            $table->string('department', 50);
            $table->enum('gender', ['M', 'F']);
            $table->date('date_of_birth');
            $table->string('phone_number', 15)->nullable();
            $table->string('email', 100)->unique();
            $table->text('address')->nullable();
            $table->date('hire_date');
            $table->decimal('salary', 15, 2);
            $table->string('status', 20)->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

