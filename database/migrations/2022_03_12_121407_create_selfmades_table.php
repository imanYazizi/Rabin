<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('selfmades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('selfmade_category_id');
            $table->text('image');
            $table->text('name');
            $table->string('price');
            $table->string('amount_1x');
            $table->string('amount_2x');
            $table->string('amount_3x');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('selfmade_category_id')->references('id')->on('selfmade_categories')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('selfmades');
    }
};
