<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExceldatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exceldatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover_image')->nullable();
            $table->string('title')->nullable();
            $table->string('firstName')->nullable();
            $table->string('surName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('position')->nullable();
            $table->string('company')->nullable();
            $table->string('addressone')->nullable();
            $table->string('addresstwo')->nullable();
            $table->string('city')->nullable();
            $table->string('postCode')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('telephoneCountry')->nullable();
            $table->string('telephoneArea')->nullable();
            $table->string('telephone')->nullable();
            $table->string('facsimileCountry')->nullable();
            $table->string('facsimileArea')->nullable();
            $table->string('facsimile')->nullable();
            $table->string('mobileArea')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('mobileAreatwo')->nullable();
            $table->string('mobileNumbertwo')->nullable();
            $table->string('emailWork')->nullable();
            $table->string('emailPrivate')->nullable();
            $table->string('email')->nullable();
            $table->string('age_group')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->string('category')->nullable();
            $table->string('event_id')->nullable();
            $table->string('eventName')->nullable();
            $table->string('eventData')->nullable();
            $table->string('opt_in')->nullable();
            $table->string('opt_out')->nullable();
            $table->string('neutral')->nullable();
            $table->string('maretingOptns')->nullable();
            $table->string('unsubscribes')->nullable();
            $table->string('history_mwan_events_attend')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('exceldatas');
    }
}
