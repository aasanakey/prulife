<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('user_policy_id')->constrianed('user_policies')->onDelete('restrict')->onUpdate('cascade');
            $table->enum('status',['more info required','pending','accepted','rejected','denied','pending payment','paid'])
            ->default('more info required');
            $table->enum('priority', ['low', 'high'])->nullable();
            $table->longText('description');
            $table->timestamp('incident_date');
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
        Schema::dropIfExists('claims');
    }
}
