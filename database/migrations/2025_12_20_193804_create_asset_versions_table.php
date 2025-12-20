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
        Schema::create('asset_versions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('asset_id');
            $table->bigInteger('version');
            $table->string('cdn_thumbnail')->nullable();
            $table->string('cdn_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_versions');
    }
};
