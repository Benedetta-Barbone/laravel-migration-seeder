<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => Carbon::now()->addMinutes(rand(1, 1440)), // Da ora a un giorno dopo
                'orario_arrivo' => Carbon::now()->addMinutes(rand(1441, 2880)), // Da un giorno a due giorni dopo
                'codice_treno' => $faker->regexify('[A-Z]{2}[0-9]{4}'),
                'numero_carrozze' => $faker->numberBetween(5, 20),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
                'tipo_treno' => $faker->randomElement(['Frecciarossa', 'Frecciargento', 'Intercity', 'Regionale']),
                'servizi_a_bordo' => $faker->randomElement(['Wi-Fi', 'Bar', 'Ristorante']),
            ]);
        }
    }
}
