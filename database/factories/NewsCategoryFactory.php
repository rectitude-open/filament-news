<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RectitudeOpen\FilamentNews\Models\NewsCategory;

class NewsCategoryFactory extends Factory
{
    protected $model = NewsCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'parent_id' => -1,
            'weight' => $this->faker->numberBetween(0, 100),
        ];
    }
}
