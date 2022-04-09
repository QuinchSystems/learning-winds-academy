<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('m_course_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete(null);
            $table->string('short_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('display_name')->nullable();
            $table->string('id_number')->nullable();
            $table->text('summary')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->string('currency_code')->default('INR');

            $table->timestamp('m_created_at')->nullable();
            $table->timestamp('m_modified_at')->nullable();

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
        Schema::dropIfExists('courses');
    }
}
