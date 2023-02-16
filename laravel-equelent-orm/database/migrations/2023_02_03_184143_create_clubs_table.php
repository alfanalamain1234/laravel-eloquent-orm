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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stadiums_id')->nullable()->index('stadiums_id_fk1_idx');
            $table->string('name');
            $table->longText('url')->nullable();
            $table->longtext('logo')->nullable();
            $table->integer('trophy')->nullable();
            $table->timestamps();
            //merupakan kolom yang akan otomatis terisi oleh laravel ketika kita melakukan insert data ke
            // database dan akan terisi dengan waktu saat ini (created_at dan updated_at)

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }

};