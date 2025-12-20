<?php

use App\Enums\ChatStyle;
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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('description', 1500);
            $table->smallInteger('type');
            $table->bigInteger('version_id')->default(1);
            $table->bigInteger('creator_id');
            
            $table->boolean('comments_enabled')->default(true);
            $table->boolean('is_public_domain')->default(true);

            $table->boolean('is_for_sale')->default(false);
            $table->bigInteger('price')->default(0);

            $table->bigInteger('gear_attributes')->default(0);
            $table->integer('server_size')->default(16)->nullable();
            $table->smallInteger('chat_style')->default(ChatStyle::Classic->value)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
