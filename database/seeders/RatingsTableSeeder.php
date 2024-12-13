<?php

namespace Database\Seeders;

use App\Models\Ratings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batch = 1000;
        $totalBatch = 500000;
        
        for ($i=0; $i < $totalBatch / $batch; $i++) {
            $data = Ratings::factory()->count($batch)->make()->toArray();
            Ratings::insert($data);
        }
    }
}
