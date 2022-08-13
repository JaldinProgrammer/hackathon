<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trash_samples', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('image')->nullable();
            $table->foreignId('trash_type_id')->constrained('trash_types');
            $table->foreignId('faculty_id')->constrained('faculties');
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
        Schema::dropIfExists('trash_samples');
    }
};
