<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batch = 1000;
        $totalBatch = 3000;
        
        for ($i=0; $i < $totalBatch / $batch; $i++) {
            $data = Category::factory()->count($batch)->make()->toArray();
            Category::insert($data);
        }
    }
}
