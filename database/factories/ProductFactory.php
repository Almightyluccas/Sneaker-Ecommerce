<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $categories = ['Footwear', 'Apparel', 'Accessories'];
    $category = $this->faker->randomElement($categories);

    $subcategories = [
      'Footwear' => ['Sneakers', 'Running', 'Basketball', 'Lifestyle'],
      'Apparel' => ['T-Shirts', 'Hoodies', 'Jackets', 'Pants'],
      'Accessories' => ['Hats', 'Socks', 'Bags', 'Watches']
    ];

    $brands = ['Nike', 'Adidas', 'New Balance', 'Jordan', 'Puma', 'Reebok'];

    return [
      'name' => $this->faker->words(3, true),
      'brand' => $this->faker->randomElement($brands),
      'silhoutte' => $this->faker->word(),
      'colorway' => $this->faker->colorName() . '/' . $this->faker->colorName(),
      'price' => $this->faker->numberBetween(7999, 29999),
      'thumbnail' => $this->faker->imageUrl(400, 400, 'shoes'),
      'release_date' => $this->faker->dateTimeBetween('-2 years', 'now'),
      'description' => $this->faker->paragraph(),
      'category' => $category,
      'subcategory' => $this->faker->randomElement($subcategories[$category]),
      'stock' => $this->faker->numberBetween(0, 100),
    ];
  }
}
