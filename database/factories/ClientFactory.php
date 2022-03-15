<?php

namespace Database\Factories;

use App\Models\Distributor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $distributors = Distributor::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($users),
            'distributor_id' =>$this->faker->randomElement($distributors),
            'cpf_cnpj'=> '123.456.789-00',
            'installation_code'=> $this->faker->randomDigit(),
            'birth' => $this->faker->date,
            'auto_billing' => $this->faker->randomElement(['S', 'N']),
            'phone'=> $this->faker->numerify('(##) #####-####'),
            'address' =>$this->faker->address,
            'zip_code'=> $this->faker->numerify('#####-###'),
            'number' => $this->faker->randomDigit(),
            'complement'=>null,
            'district' =>$this->faker->streetName,
            'city' => $this->faker->city,
            'state'=> $this->faker->countryCode,
        ];
    }
}
