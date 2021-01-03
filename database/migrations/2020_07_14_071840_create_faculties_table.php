<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->bigInteger('facultyid');            
            $table->string('facultyfirstname');
            $table->string('facultylastname');
            $table->string('facultyemailid')->nullable();
            $table->string('facultydesignation')->nullable();
            $table->string('facultyqualification')->nullable();
            $table->date('joiningdate')->nullable();
            $table->date('facultydob')->nullable();
            $table->integer('facultyexperience')->nullable();
            $table->integer('nationalpublication')->nullable();
            $table->integer('internationalpublication')->nullable();
            $table->string('facultygender')->nullable();
            $table->string('facultyaddress')->nullable();
            $table->string('facultyachievement')->nullable();
            $table->string('facultyimage')->nullable();            
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
        Schema::dropIfExists('faculties');
    }
}
