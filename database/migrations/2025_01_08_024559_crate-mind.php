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
        Schema::create('mind',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('content',500);
            $table->tinyInteger('enabled')->default(1);
            //快速創建兩個欄位：created_at 和 updated_at
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
        //
    }
};
