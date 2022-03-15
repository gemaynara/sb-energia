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
        $users = User::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($users),
            'cnpj'=>'00.000.000/0001-00',
            'value_te'=> $this->faker->numerify('###'),
            'value_usd' =>$this->faker->numerify('###'),
            'value_icms'=> $this->faker->numerify('###')
        ];
    }
}
