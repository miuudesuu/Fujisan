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
        Schema::table('questions', function (Blueprint $table) {
            $table->foreignId('question_category_id')->constrained()->onDelete('cascade');   
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
        //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            //
        });
    }
};
