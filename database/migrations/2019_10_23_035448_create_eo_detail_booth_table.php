<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoDetailBoothTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_detail_booth', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('eo_detail_id');
            $table->string('boothname');
            $table->decimal('panjang');
            $table->decimal('lebar');
            $table->decimal('price');
            $table->text('description');
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
        Schema::dropIfExists('eo_detail_booth');
    }
}
