<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PushSubscriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //Schema::create('push_subscriptions', function (Blueprint $table) {
            Schema::table('push_subscriptions', function ($table) {
            $table->charset ='utf8';
            $table->collation = 'utf8_unicode_ci';
            // $table->increments('id');
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
    }
}
