<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\Authors;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Books::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique(100000)->word(),
            'author_id' => $this->faker->numberBetween(1,1000),
            'category_id' => $this->faker->numberBetween(1,3000),
        ];
    }
}
