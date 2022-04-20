<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class hobbiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->text(20),
            'age'=> $this->faker->number(2),
            'hobby'=> $this->faker->text(15),
            'sports'=> $this->faker->text(15),
        ];
    }
}
