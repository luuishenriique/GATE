<?php

namespace Database\Factories;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'tomb_id' => $this->faker->randomNumber(7, true),
            'model' => $this->faker->bothify('????-###'),
            'manufacturer' => $this->faker->word,
            'description' => $this->faker->sentence(3),
            'status' => $this->faker->numberBetween(0,1),
        ];
    }
}
