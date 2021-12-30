<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfarzationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confarzations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();  // كلمة نال اوبل ازا كان بين يوزر ويوزر يكون تفتراضيا نل   || هاد الحقل عشان ازا كان قروب
            $table->uuid('uuid')->unique();          // حقل مستقل لكل محادثة
            $table->foreignId('User_id')->constrained()->cascadeOnDelete(); // عشان صاحب القروب يقدر يحذف القروب
            $table->timestamp('last-masseg-at')->nullable(); // time last massege
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

    }
}
