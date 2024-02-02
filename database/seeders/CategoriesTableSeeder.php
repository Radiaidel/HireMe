<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            ['name' => 'Plomberie'],
            ['name' => 'Peinture'],
            ['name' => 'Jardinage'],
            ['name' => 'Électricité'],
            ['name' => 'Nettoyage'],
            ['name' => 'Cuisine'],
            ['name' => 'Baby-sitting'],
            ['name' => 'Entretien de la piscine'],
            ['name' => 'Services de déménagement'],
            ['name' => 'Cours particuliers'],
            ['name' => 'Services de photographie'],
        ]);
        }
}
