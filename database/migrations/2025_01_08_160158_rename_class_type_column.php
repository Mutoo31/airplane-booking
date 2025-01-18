<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('flight_classes', function (Blueprint $table) {
        $table->renameColumn('class-type', 'class_type');
    });
}

public function down()
{
    Schema::table('flight_classes', function (Blueprint $table) {
        $table->renameColumn('class_type', 'class-type');
    });
}

};
