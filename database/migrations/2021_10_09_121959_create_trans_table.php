<?php
/*
Full texts
tid
tamt
towner
tremarks
tdate*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->id("tid");
            $table->integer("tamt")->default(0);
            $table->unsignedBigInteger('towner');

            $table->string("tremarks");
            $table->date('tdate');
            $table->timestamps();
            $table->foreign('towner')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans');
    }
}
