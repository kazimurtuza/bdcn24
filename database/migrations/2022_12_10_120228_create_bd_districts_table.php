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
        Schema::create('bd_districts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('division_id');
            $table->string('name', 32)->nullable();
            $table->string('bn_name', 128)->nullable();
            $table->string('lat', 16)->nullable();
            $table->string('lon', 16)->nullable();
            $table->string('url', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bd_districts');
    }
};
