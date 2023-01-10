<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Command;
use App\Models\CommandDetail;
use App\Models\Product;

class CommandDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommandDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'command_id' => Command::factory(),
            'product_id' => Product::factory(),
            'qty' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
