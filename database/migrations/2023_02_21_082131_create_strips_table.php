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
        Schema::create('strips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('source_id')->constrained();
            $table->timestamp('downloaded_at');
            $table->date('date');
            $table->string('name')->nullable();
            $table->string('filename');
            $table->string('original_url');
            $table->string('original_filename');
            $table->string('title')->nullable();
            $table->text('alt_text')->nullable();
            $table->text('description')->nullable();
            $table->string('hash', 32)->unique();
            $table->string('mime_type', 20);
            $table->string('extension', 5);
            $table->unsignedBigInteger('size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strips');
    }
};
