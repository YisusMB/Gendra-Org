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

            $table->timestamp('start_date')->nullable();
            $table->timestamp('finalization_date')->nullable();

            $table->string('instructorName', 128);
            $table->string('courseAddress', 64);
            $table->mediumText('excerpt');
            $table->string('file', 240);
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
