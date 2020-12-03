<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('eo_users_id');
            $table->string('title');
            $table->string('image');
            $table->string('image_layout')->nullable();
            $table->text('description');
            $table->integer('eo_detail_categories_id');
            $table->integer('capacity');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
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
        Schema::dropIfExists('eo_details');
    }
}
