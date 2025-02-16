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
        Schema::create('epg_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('epg_img')->nullable()->comment('節目表圖片');
            $table->string('alt')->nullable()->comment('節目表圖片alt');
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
        Schema::drop('epg_infos');
    }
};
