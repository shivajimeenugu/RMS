<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ltrans', function (Blueprint $table) {
            $table->id("ltid");
            $table->integer("ltamt")->default(0);
            $table->unsignedBigInteger('ltowner');

            $table->string("ltremarks");
            $table->date('ltdate');
            $table->timestamps();
            $table->foreign('ltowner')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ltrans');
    }
}
