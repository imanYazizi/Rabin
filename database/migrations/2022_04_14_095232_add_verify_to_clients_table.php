<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('phone_code')->nullable()->after('password');
            $table->string('email_code')->nullable()->after('phone_code');
            $table->boolean('is_phone_verify')->default(false)->after('email_code');
            $table->boolean('is_email_verify')->default(false)->after('is_phone_verify');
        });
    }


    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
};
