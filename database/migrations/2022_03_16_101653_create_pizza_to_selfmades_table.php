<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_to_selfmades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_id');
            $table->unsignedBigInteger('selfmade_id');

            $table->timestamps();

            $table->foreign('pizza_id')->references('id')->on('pizzas')
                ->onDelete('cascade')->onUpdate('cascade');


            $table->foreign('selfmade_id')->references('id')->on('selfmades')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_to_selfmades');
    }
};
