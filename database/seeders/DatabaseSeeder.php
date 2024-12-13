<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Books;
use App\Models\Authors;
use App\Models\Ratings;
use App\Models\Category;
use PharIo\Manifest\Author;
use Illuminate\Database\Seeder;
use Database\Seeders\BooksTableSeeder;
use Database\Seeders\AuthorTableSeeder;
use Database\Seeders\RatingsTableSeeder;
use Database\Seeders\CategoryTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AuthorTableSeeder::class,
            CategoryTableSeeder::class,
            BooksTableSeeder::class,
            RatingsTableSeeder::class,
        ]);
    }
}
