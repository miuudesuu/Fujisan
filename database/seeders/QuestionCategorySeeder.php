<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class QuestionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('question_categories')->insert([
                'name' => '持ち物',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('question_categories')->insert([
                'name' => '天気',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('question_categories')->insert([
                'name' => 'ルート',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('question_categories')->insert([
                'name' => '富士山知識',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
