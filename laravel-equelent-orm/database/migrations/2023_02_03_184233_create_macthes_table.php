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
        Schema::create('macthes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clubs_id')->index('clubs_id_fk4_idx');
            $table->foreignId('rivals_id')->index('rivals_id_fk5_idx');
            $table->dateTime('schedule');
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
        Schema::dropIfExists('macthes');
    }
};
