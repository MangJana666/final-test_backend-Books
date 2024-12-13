<?php

namespace Database\Seeders;

use App\Models\Authors;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batch = 500;
        $totalBatch = 1000;
        
        for ($i=0; $i < $totalBatch / $batch; $i++) {
            $data = Authors::factory()->count($batch)->make()->toArray();
            Authors::insert($data);
        }
    }
}
