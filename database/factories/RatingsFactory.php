<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\Authors;
use App\Models\Ratings;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ratings>
 */
class RatingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Ratings::class;
    public function definition(): array
    {
        return [
            'rating' => $this->faker->numberBetween(1,10), 
            'book_id' => $this->faker->numberBetween(1,100000),
        ];
    }
}
