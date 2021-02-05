<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('token');
            $table->integer('old');
            $table->foreignId('user_id')->constrained()->deleteOncascade();
            $table->string('photo')->nullable();
            $table->string('cursus')->nullable();
            $table->string('description');
            $table->foreignId('organisation_id')->constrained()->onDeleteCascade();

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
        Schema::dropIfExists('childrens');
    }
}
