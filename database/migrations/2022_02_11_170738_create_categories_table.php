<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('m_category_id')->nullable();
            $table->string('idnumber')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('descriptionformat')->default(1);
            $table->unsignedBigInteger('parent')->default(0);
            $table->unsignedBigInteger('sortorder')->default(0);
            $table->unsignedBigInteger('coursecount')->default(0);
            $table->tinyInteger('visible')->default(1);
            $table->tinyInteger('visibleold')->default(1);
            $table->timestamp('timemodified')->nullable();
            $table->string('path')->nullable();
            $table->unsignedInteger("depth")->default(0);
            $table->string('theme')->nullable();

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
        Schema::dropIfExists('categories');
    }
}
