<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->string('courseName', 128);
            $table->string('slug', 128)->unique();

            $table->integer('dayCalendar')->unsigned();
            $table->string('month');

            $table->string('instructorName', 128);
            $table->string('startDate', 64);
            $table->string('courseAddress', 64);
            $table->mediumText('excerpt');
            $table->string('file', 128);
            $table->text('description');

            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

            //Relations
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
