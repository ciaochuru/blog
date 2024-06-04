<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
                'name' => '日常',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        
        DB::table('categories')->insert([
                'name' => 'ゲーム',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        
        DB::table('categories')->insert([
                'name' => 'アニメ・マンガ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        
        DB::table('categories')->insert([
                'name' => '音楽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
    }
}
