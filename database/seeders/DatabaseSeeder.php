<?php

namespace Database\Seeders;

use App\Models\Cas;
use App\Models\CasType;
use App\Models\Children;
use App\Models\Organisation;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


     

      for ($i = 0; $i < 50 ; $i++) {
          Cas::create([
            'image_1' => 'cas_1.jpg',
            'image_2' => 'cas_2.jpg',
            'image_3' => 'cas_3.jpg',
            'money' => rand(500,1500000),
            'cas_types_id' => CasType::all()->random()->id,
            'description' => 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu',
            'Organisation_id' => CasType::all()->random()->id,
        ]);
      }







    }
}
