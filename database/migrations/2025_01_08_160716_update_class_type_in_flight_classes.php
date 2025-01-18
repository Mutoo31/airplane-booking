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
        Schema::table('flight_classes', function (Blueprint $table) {
            $table->enum('class_type', ['economy', 'business'])->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flight_classes', function (Blueprint $table) {
            $table->enum('class_type', ['economy', 'bussiness'])->change();
        });
    }
};
