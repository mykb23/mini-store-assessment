<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price'=> $this->faker->numberBetween(150 , 1500),
            'currency' => $this->faker->currencyCode('USD', 'GBP','EUR'),
            'image' => $this->faker->imageUrl(400,200,'fashion',true,'Faker'),
        ];
    }
}
