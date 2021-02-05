<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cas', function (Blueprint $table) {
            $table->id();
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3')->nullable();
            $table->text('description');
            $table->integer('money');
            $table->foreignId('cas_types_id')->constrained()->onDeleteCascade();
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
        Schema::dropIfExists('cas');
    }
}
