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
        Schema::create('topic_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topic_id');
            $table->string('title', 1000)->nullable()->default(null);
            $table->text('short_description')->nullable();
            $table->text('description')->nullable()->default(null);
            $table->text('code')->nullable()->default(null);
            $table->string('code_language')->nullable()->default(null);
            $table->text('note')->nullable()->default(null);
            $table->text('custom_output')->nullable()->default(null);
            $table->decimal('ordering',10, 2)->default(0);
            $table->boolean('active_status')->default(true);
            $table->foreign('topic_id', 'topic_details_topic_id_foreign')->on('topics')->references('id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_details');
    }
};
