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
        Schema::table('sections', function (Blueprint $table) {
            \Illuminate\Support\Facades\DB::statement("ALTER TABLE `sections` ADD `showing_user` TINYINT NULL DEFAULT '1' AFTER `is_deleted`, ADD `showing_admin` TINYINT NULL DEFAULT '1' AFTER `showing_user`;");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            //
        });
    }
};
