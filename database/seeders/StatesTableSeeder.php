<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");

        DB::table("states")->insert([
            [
                "id"         => 11,
                "state"       => "Rondônia",
                "abbr"       => "RO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 12,
                "state"       => "Acre",
                "abbr"       => "AC",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 13,
                "state"       => "Amazonas",
                "abbr"       => "AM",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 14,
                "state"       => "Roraima",
                "abbr"       => "RR",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 15,
                "state"       => "Pará",
                "abbr"       => "PA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 16,
                "state"       => "Amapá",
                "abbr"       => "AP",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 17,
                "state"       => "Tocantins",
                "abbr"       => "TO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 21,
                "state"       => "Maranhão",
                "abbr"       => "MA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 22,
                "state"       => "Piauí",
                "abbr"       => "PI",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 23,
                "state"       => "Ceará",
                "abbr"       => "CE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 24,
                "state"       => "Rio Grande do Norte",
                "abbr"       => "RN",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 25,
                "state"       => "Paraíba",
                "abbr"       => "PB",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 26,
                "state"       => "Pernambuco",
                "abbr"       => "PE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 27,
                "state"       => "Alagoas",
                "abbr"       => "AL",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 28,
                "state"       => "Sergipe",
                "abbr"       => "SE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 29,
                "state"       => "Bahia",
                "abbr"       => "BA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 31,
                "state"       => "Minas Gerais",
                "abbr"       => "MG",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 32,
                "state"       => "Espírito Santo",
                "abbr"       => "ES",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 33,
                "state"       => "Rio de Janeiro",
                "abbr"       => "RJ",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 35,
                "state"       => "São Paulo",
                "abbr"       => "SP",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 41,
                "state"       => "Paraná",
                "abbr"       => "PR",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 42,
                "state"       => "Santa Catarina",
                "abbr"       => "SC",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 43,
                "state"       => "Rio Grande do Sul",
                "abbr"       => "RS",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 50,
                "state"       => "Mato Grosso do Sul",
                "abbr"       => "MS",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 51,
                "state"       => "Mato Grosso",
                "abbr"       => "MT",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 52,
                "state"       => "Goiás",
                "abbr"       => "GO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 53,
                "state"       => "Distrito Federal",
                "abbr"       => "DF",
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);

    }
}
