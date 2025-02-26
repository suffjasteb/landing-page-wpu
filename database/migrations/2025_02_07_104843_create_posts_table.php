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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // kalo id di set sama laravel itu unsignedBigInteger
            $table->string('title');
            // // maka dari itu di author_id bukan pakai string tapi unsignedBigInteger
            // $table->unsignedBigInteger('author_id');
            // // author_id itu referensi ke field id di table users
            // $table->foreign('author_id')->references('id')->on('users');

            // table foreignId kita kasi nama author_id dia akan terhubung ke table users
            $table->foreignId('author_id')->constrained(
                table: 'users', indexName: 'posts_author_id' // kita kasi nama index nya posts_author_id
            );

            $table->foreignId('category_id')->constrained(
                table: 'categories', indexName: 'posts_category_id' // kita kasi nama index nya posts_author_id
            );

            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
