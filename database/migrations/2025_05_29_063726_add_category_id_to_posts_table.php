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
        Schema::table('posts', function (Blueprint $table) {
            // category_id কলাম যোগ করছি
            $table->unsignedBigInteger('category_id')->after('id')->nullable();

            // Optional: যদি foreign key constraint চাও
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // প্রথমে foreign key ড্রপ করতে হবে
            $table->dropForeign(['category_id']);

            // তারপর column ড্রপ করতে হবে
            $table->dropColumn('category_id');
        });
    }
};
