<?php

namespace Database\Factories;

use App\Models\Authors;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Authors>
 */
class AuthorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Authors::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique(1000)->name(), 
        ];
    }
}
