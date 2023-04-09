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
        Schema::create('attempt', function (Blueprint $table) {
            $table->year('year')->primary();
            $table->integer('semester');
            $table->foreignId('student_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->string('grade');
            $table->boolean('mark');
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
        Schema::dropIfExists('attempt');
    }
};
