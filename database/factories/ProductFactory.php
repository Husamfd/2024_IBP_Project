<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cate_id' => $this->faker->numberBetween(1, 10), // توليد أرقام عشوائية لـ cate_id
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'small_description' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'original_price' => $this->faker->randomFloat(2, 10, 1000),
            'selling_price' => $this->faker->randomFloat(2, 10, 1000),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
            'qty' => $this->faker->numberBetween(1, 100),
            'tax' => $this->faker->numberBetween(0, 20),
            'status' => $this->faker->boolean,
            'trending' => $this->faker->boolean,
            'meta_title' => $this->faker->sentence,
            'meta_keyword' => $this->faker->words(3, true),
            'meta_description' => $this->faker->paragraph,
        ];
    }
}
