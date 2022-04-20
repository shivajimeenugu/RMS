<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pushsubmodifiy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('push_subscriptions', function ($table) {
            $table->integer('guest_id')->unsigned()->index();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    }
}
