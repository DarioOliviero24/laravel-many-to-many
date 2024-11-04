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
        Schema::create ('Tecnologies_Project', function (Blueprint $table) {
            $table->unsignedBigInteger('Project_id');
            $table->foreign('Project_id')->references('id')->on('Project');

            $table->unsignedBigInteger('Tecnologies_id');
            $table->foreign('Tecnologies_id')->references('id')->on('Tecnologies');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
