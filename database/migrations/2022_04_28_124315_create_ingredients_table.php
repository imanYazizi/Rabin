<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ingredient_category_id');
            $table->string('name');
            $table->text('image');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ingredient_category_id')->references('id')->on('ingredient_categories')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
};
