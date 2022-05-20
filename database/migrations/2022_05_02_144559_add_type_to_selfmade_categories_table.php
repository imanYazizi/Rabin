<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('selfmade_categories', function (Blueprint $table) {
            $table->string('type')->after('image')->nullable();
        });
    }


    public function down()
    {
        Schema::table('selfmade_categories', function (Blueprint $table) {
            //
        });
    }
};
