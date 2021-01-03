<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigInteger('eventid')->unique();
            $table->string('eventtitle');
            $table->string('eventtype');
            $table->string('eventdetail')->nullable();
            $table->string('eventcoordinator')->nullable();
            $table->string('eventconductedby')->nullable();
            $table->date('eventdate')->nullable();
            $table->string('eventimage')->nullable();            
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
        Schema::dropIfExists('events');
    }
}
