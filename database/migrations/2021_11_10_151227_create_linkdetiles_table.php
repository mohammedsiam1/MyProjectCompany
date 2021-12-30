<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkdetilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkdetiles', function (Blueprint $table) {
            $table->id();
            $table->integer('link_id');
            $table->string('linkdetileName');
            $table->string('linkPageNmae');
            $table->string('linkRoutName');
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
        Schema::dropIfExists('linkdetiles');
    }
}
