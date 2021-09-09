<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('firstname');
            $table->string('lastname');
            $table->mediumText('address');
            $table->string('phone')->unique();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avatar')->default('storage/default-avatar.jpg');
            $table->foreignId('country_id')->nullable()->constrained('countries')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('state_id')->nullable()->constrained('states')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onUpdate('cascade')->onDelete('restrict');
            $table->string('password')->nullable();
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
}
