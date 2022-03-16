<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::where('is_admin', 0)->pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($users),
            'invoice_year' => 2022,
            'invoice_month' => $this->faker->month,
            'consumption' => $this->faker->numerify('#####'),
            'group' => $this->faker->randomElement(['A', 'B', 'C']),
            'reading_date' => $this->faker->date,
            'due_date' => $this->faker->date,
            'extra_value' => $this->faker->numerify('##'),
            'fare_value' => $this->faker->numerify('###'),
            'status' => $this->faker->randomElement(['pending', 'paid', 'canceled', 'suspended'])
        ];
    }
}
