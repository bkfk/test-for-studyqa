<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondFeastMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_feast_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('education_level_id');
            $table->unsignedBigInteger('feast_id')->default(2);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone', 11);
            $table->string('email',50);
            $table->ipAddress('ip');
            $table->string('utm')->nullable();
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
        Schema::dropIfExists('second_feast_members');
    }
}
