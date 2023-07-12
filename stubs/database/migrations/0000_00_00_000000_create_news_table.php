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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('active')->default(1)->nullable();
            $table->tinyInteger('is_action')->default(0)->nullable();
            $table->integer('sort')->default(500)->nullable(false);
            $table->string('name', 255)->nullable(false)->unique();
            $table->string('slug', 255)->nullable(false)->unique();
            $table->string('text')->nullable(false);
            $table->text('photos')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
