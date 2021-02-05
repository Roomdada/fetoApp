<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->integer('donation');
            $table->foreignId('user_id')->constrained()->onDeleteCascade();
            $table->foreignId('cas_id')->constrained()->onDeleteCascade();
            $table->foreignId('donation_types_id')->constrained()->onDeleteCascade();
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
        Schema::dropIfExists('donations');
    }
}
