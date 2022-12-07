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
        Schema::create('user_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rfid_uid');
            $table->unsignedBigInteger('id_slot');
            $table->dateTime('check_in_at');
            $table->dateTime('check_out_at')->nullable();
        });

        Schema::table('user_entries', function (Blueprint $table) {
            $table->foreign('id_slot')->references('id')->on('slots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_entries');
    }
};
