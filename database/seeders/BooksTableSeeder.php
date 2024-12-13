<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batch = 1000;
        $totalBatch = 100000;
        
        for ($i=0; $i < $totalBatch / $batch; $i++) {
            $data = Books::factory()->count($batch)->make()->toArray();
            Books::insert($data);
        }
    }
}
