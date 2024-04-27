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
        Schema::create('subject_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->string('name');
            $table->string('slug');
            $table->decimal('ordering',10, 2)->default(0);
            $table->foreign('subject_id', 'subject_groups_subject_id_foreign')->on('subjects')->references('id')->cascadeOnDelete();
            $table->unique(['subject_id', 'slug'], 'subject_groups_subject_id_slug_unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_groups');
    }
};
