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
        Schema::create('repair_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('repair_item');
            $table->string('name');
            $table->string('tel');
            $table->string('email')->nullable();
            $table->string('city');
            $table->string('district');
            $table->string('zipcode');
            $table->string('address');
            $table->longText('message');
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
        Schema::drop('repair_infos');
    }
};
