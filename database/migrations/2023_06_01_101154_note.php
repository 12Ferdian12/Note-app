<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Note', function (Blueprint $table) {
            $table->bigIncrements('NoteID');
            $table->string('Name');
            $table->text('Content');
            $table->timestamps();
            $table->bigInteger('IdCategory')->unsigned();

            $table->foreign('IdCategory')->references('CategoryID')->on('Category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Note');
    }
};
