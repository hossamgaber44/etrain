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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->string ('favicon');
            $table->string('city');
            $table->string('address');
            $table->string ('phone');
            $table->string('work_hours');
            $table->string('email');
            $table->text ('map');
            $table->string ('facebook');
            $table->string('twitter');
            $table->string('instgrame');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};