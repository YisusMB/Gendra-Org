<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->string('profileName', 128);
            $table->string('slug', 128)->unique();

            
            $table->string('dateOfIncorporation', 64);
            $table->string('languages', 128);
            $table->string('dateOfGraduation', 64);
            
            $table->string('file', 128);
            $table->text('description');

            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

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
        Schema::dropIfExists('profiles');
    }
}
