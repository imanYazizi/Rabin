<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
            $table->text('key');
            $table->enum('type' , ['text' , 'image']);
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('landings');
    }
};
