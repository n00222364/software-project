<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('beaches', function (Blueprint $table) {
            $table->string('water_quality_status')->nullable()->after('quality_results');
            $table->integer('e_coli')->nullable()->after('water_quality_status');
            $table->integer('intestinal_enterococci')->nullable()->after('e_coli');
        });
    }

    public function down(): void
    {
        Schema::table('beaches', function (Blueprint $table) {
            $table->dropIfExists([
                'water_quality_status',
                'e_coli',
                'intestinal_enterococci',
            ]);
        });
    }
};
