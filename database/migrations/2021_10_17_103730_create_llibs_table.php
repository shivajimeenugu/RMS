<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llibs', function (Blueprint $table) {
            $table->id("llid");
            $table->unsignedBigInteger('ollid');
            $table->unsignedBigInteger('lltid');
            $table->unsignedBigInteger('lluid');
            $table->integer("llamt")->default(0);
            $table->boolean("llsts")->default(1);
            $table->timestamps();
            $table->foreign('lltid')->references('ltid')->on('ltrans')->onDelete('cascade');
            $table->foreign('ollid')->references('lid')->on('libs');
            $table->foreign('lluid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llibs');
    }
}
