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
        Schema::table('flight_seats', function (Blueprint $table) {
            $table->renameColumn('class-type', 'class_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flight_seats', function (Blueprint $table) {
            $table->renameColumn('class_type', 'class-type');
        });
    }
};
