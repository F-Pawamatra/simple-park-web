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
        Schema::create('mq2_meters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('co_ppm')->default(0);
            $table->float('smoke_pmm')->default(0);
            $table->dateTime('at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mq2_meters');
    }
};
