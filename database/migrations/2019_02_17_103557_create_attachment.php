<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('file_type')->nullable();
            $table->integer('parent_id');
            $table->integer('parent_type');
            $table->integer('developer_parent_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachment');
    }
}
