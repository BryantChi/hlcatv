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
        Schema::create('cable_tv_promotions_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('標題');
            $table->longText('content')->nullable()->comment('內容');
            $table->longText('cover_front_image')->nullable()->comment('封面圖');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cable_tv_promotions_infos');
    }
};
