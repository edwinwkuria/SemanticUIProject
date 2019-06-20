<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table -> string('NameOfEvent');
            $table -> string('VenueOfEvent');
            $table -> string('Town');
            $table -> String('DateOfTheEvent');
            $table -> string('OrganizingCompany');
            $table -> string('ContactEmail');
            $table -> string('Description');
            //$table -> string('Categories');
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
