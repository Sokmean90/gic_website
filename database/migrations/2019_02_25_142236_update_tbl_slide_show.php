<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTblSlideShow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slide_shows',function(Blueprint $table){
            $table->string('link_to')->nullable();
        });
    }

    /**te\Support\Facades\Schema
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slide_shows',function(Blueprint $table){
            $table->dropColumn('link_to');
        });
    }
}
