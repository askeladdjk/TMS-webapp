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

    Schema::create('transactionhistory', function (Blueprint $table) {
        $table->increments('transactionid');
        $table->string('tenant');
        $table->string('room');
        $table->decimal('amount', 8, 2);
        $table->date('due_date');
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
