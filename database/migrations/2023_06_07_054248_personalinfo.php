<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personalinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tms_user_id');
            $table->foreign('tms_user_id')->references('id')->on('tms_users')->onDelete('cascade');
            $table->string('name');
            $table->date('tenant_since');
            $table->string('contact_number');
            $table->string('home_address');
            $table->string('contact_person');
            $table->string('relationship');
            $table->string('contact_person_number');
            $table->string('contact_person_address');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
