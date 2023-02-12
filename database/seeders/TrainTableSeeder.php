<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<20; $i++){
            $new_train_object = new Train(); // questo si collega al modello inserito in Models
            $new_train_object->azienda = $faker->bothify('??-########');
            $new_train_object->stazione_di_partenza = $faker->city();
            $new_train_object->data_di_partenza = $faker->date();
            $new_train_object->orario_di_partenza = $faker->time();
            $new_train_object->data_di_arrivo = $faker->date();
            $new_train_object->orario_di_arrivo = $faker->time();
            $new_train_object->codice_treno = $faker->randomNumber(6, true);
            $new_train_object->numero_carrozze = $faker->randomNumber(1, 9);
            $new_train_object->in_orario = $faker->randomElement( [true, false] );
            $new_train_object->cancellato = $faker->randomElement( [true, false] );
            $new_train_object->save();
        }
    }
}
