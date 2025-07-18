<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentNews\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RectitudeOpen\FilamentNews\Models\News;

class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'summary' => $this->faker->realText(255),
            'content' => $this->faker->realText(255),
            'weight' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean ? 1 : 0,
            'external_link' => $this->faker->url(),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
