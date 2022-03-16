<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistributorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'cnpj' => $this->faker->numerify('##.###.###/0001-##'),
            'value_te' => $this->faker->numerify('###'),
            'value_tusd' => $this->faker->numerify('###'),
            'value_icms' => $this->faker->numerify('###')
        ];
    }
}
