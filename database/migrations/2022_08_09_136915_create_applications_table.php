<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->date('birthDate');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('status')->default("Pending");
            $table->string('email');
            $table->string('phone');
            $table->string('company');
            $table->string('address');
            $table->string('applicantImage');

            $table->timestamps();


            $table->unsignedInteger('programs_id');
            $table->foreign('programs_id')
            ->references('id')->on('programs')
            ->onDelete('cascade');
            

            $table->unsignedInteger('subjects_id');
            $table->foreign('subjects_id')
            ->references('id')->on('subjects')
            ->onDelete('cascade');
            
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};