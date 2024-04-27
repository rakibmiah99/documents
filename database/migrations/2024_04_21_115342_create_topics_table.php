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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('subject_group_id')->nullable()->default(null);
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->boolean('active_status')->default(true);
            $table->decimal('ordering',10, 2)->default(0);
//            $table->foreign('subject_id', 'topics_subject_id_foreign')->on('subjects')->references('id')->cascadeOnDelete();
            $table->foreign('subject_group_id', 'topics_subject_group_id_foreign')->on('subject_groups')->references('id')->cascadeOnDelete();
//            $table->unique(['subject_id', 'slug'], 'topics_subject_id_slug_unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
