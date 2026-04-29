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
        Schema::create('trips', function (Blueprint $table) {
        $table->id();                              // auto-increment primary key
        $table->string('name');
        $table->string('country');
        $table->date('start_date');
        $table->date('end_date');
        $table->text('notes')->nullable();          // text column, allows NULL
        $table->timestamps();                       // adds created_at + updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
