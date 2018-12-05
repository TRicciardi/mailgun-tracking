<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid')->unique();

            $table->integer('delivered')->unsigned()->default(0);
            $table->integer('bounced')->unsigned()->default(0);
            $table->integer('spam')->unsigned()->default(0);
            $table->integer('dropped')->unsigned()->default(0);
            $table->integer('unsubscribed')->unsigned()->default(0);
            $table->integer('opened')->unsigned()->default(0);
            $table->integer('clicked')->unsigned()->default(0);
            
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
        Schema::dropIfExists('email_tracking');
    }
}
