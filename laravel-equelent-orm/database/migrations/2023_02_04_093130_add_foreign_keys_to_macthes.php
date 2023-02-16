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
        Schema::table('macthes', function (Blueprint $table) {
            $table->foreign('clubs_id', 'clubs_id_fk4')
            ->references('id')->on('clubs')
            ->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('rivals_id', 'rivals_id_fk5')
            ->references('id')->on('clubs')
            ->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('macthes', function (Blueprint $table) {
            $table->dropForeign('clubs_id_fk4');
            $table->dropForeign('rivals_id_fk5');
        });
    }
};
