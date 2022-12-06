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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('account', 50)->unique();
            $table->string('password', 60);
            $table->integer('type')->default(0);
            $table->tinyInteger('sex')->default(0);
            $table->decimal('height')->default(0);
            $table->decimal('weight')->default(0);
            $table->string('interest', 100)->default('');
            $table->string('introduce', 500)->default('');
            $table->string('picture', 50)->default('');
            $table->tinyInteger('enabled')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};