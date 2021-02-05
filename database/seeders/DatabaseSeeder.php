<?php

namespace Database\Seeders;

use App\Models\CasType;
use App\Models\Organisation;
use App\Models\Type;
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




      Type::create(['name' => 'Sanitaire']);
      Type::create(['name' => 'ONG']);
      Type::create(['name' => 'Orphelinat']);
      Type::create(['name' => 'Centre d\'accueil']);
      Type::create(['name' => 'Autres']);


      CasType::create(['name' => 'Financier']);
      CasType::create(['name' => 'Materiel']);

      Organisation::create([
          'name' => 'CHU DE COCODY',
          'email' => 'chucocody@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'chu-cocody.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 1
          ]);



         Organisation::create([
          'name' => 'CHU DE TREICHVILLE',
          'email' => 'chutreichville@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'chu-treichville.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 1
          ]);


          Organisation::create([
          'name' => 'CHU DE YOPOUGON',
          'email' => 'chuyopougon@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'chu-yopougon.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 1
          ]);


          Organisation::create([
          'name' => 'POUPONNIERE MARIE THERESE D\'ADJAME',
          'email' => 'pouponniere_marietherese@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'marie-therese.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 3
          ]);


          Organisation::create([
          'name' => 'FONDATION FUTURAFRIC',
          'email' => 'fafric@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'fa.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 5
          ]);



           Organisation::create([
          'name' => 'ORPHELINAT GARCON DE BINGERVILLE',
          'email' => 'orphelinatga@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'bingerville.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 3
          ]);


           Organisation::create([
          'name' => 'ORPHELINAT LE PRINCE DE BASSAM',
          'email' => 'orphelinatbassam@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'bassam.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 3
          ]);


          Organisation::create([
          'name' => 'POUPONNIERE DE DABOU',
          'email' => 'pdabou@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'dabou.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 3
          ]);


       

          Organisation::create([
          'name' => 'BOUKAMIE',
          'email' => 'boukamie@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'boukamie.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 2
          ]);


          Organisation::create([
          'name' => 'CENTRE DES ENFANTS EN CONFLIT AVEC LA LOI',
          'email' => 'centre@feto.com',
          'password' => Hash::make('jesuisfeto'),
          'phone' => 'XXXXXXXXXX',
          'logo' => 'centre.jpg',
          'validation' => 1,
          'token' => Str::random(60),
          'type_id' => 4
          ]);








    }
}
