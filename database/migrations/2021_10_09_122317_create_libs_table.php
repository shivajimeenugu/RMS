<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        lid
        ltid
        luid
        lamt
        lsts
        */
        Schema::create('libs', function (Blueprint $table) {
            $table->id("lid");
            $table->unsignedBigInteger('ltid');
            $table->unsignedBigInteger('luid');
            $table->integer("lamt")->default(0);
            $table->boolean("lsts")->default(1);
            $table->timestamps();
            $table->foreign('ltid')->references('tid')->on('trans')->onDelete('cascade');
            $table->foreign('luid')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libs');
    }
}
