<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_category_id');
            $table->text('image')->nullable();
            $table->boolean('available')->default(true);
            $table->string('name');
            $table->string('price');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('item_category_id')->references('id')->on('item_categories')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('items');
    }
};
