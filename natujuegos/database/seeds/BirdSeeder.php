<?php

use Illuminate\Database\Seeder;

class BirdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('birds_test')->insert([
			[
			  'name' => 'hornero',
			  'description' => 'Ave nacional',
			  'region' => 'Buenos Aires',
			  'state' => 1,
			  'photo' => 'img/hornero.jpg',
			  'created_at' => date('Y-m-d H:i:s'),
			  'updated_at' => date('Y-m-d H:i:s'),
			],
			[
			  'name' => 'calandria',
			  'description' => 'Ave con pico corto',
			  'region' => 'Buenos Aires',
			  'state' => 2,
			  'photo' => 'img/calandria.jpg',
			  'created_at' => date('Y-m-d H:i:s'),
			  'updated_at' => date('Y-m-d H:i:s'),
			],
			[
			  'name' => 'gavilan',
			  'description' => 'Ave rapaz',
			  'region' => 'Buenos Aires',
			  'state' => 5,
			  'photo' => 'img/gavilan.jpg',
			  'created_at' => date('Y-m-d H:i:s'),
			  'updated_at' => date('Y-m-d H:i:s'),
			],
			[
			  'name' => 'picaflor',
			  'description' => 'Vuela muy rápido',
			  'region' => 'Buenos Aires',
			  'state' => 4,
			  'photo' => 'img/picaflor.jpg',
			  'created_at' => date('Y-m-d H:i:s'),
			  'updated_at' => date('Y-m-d H:i:s'),
			],
			[
			  'name' => 'cabure',
			  'description' => 'De la familia de las lechuzas',
			  'region' => 'Buenos Aires',
			  'state' => 5,
			  'photo' => 'img/cabure.jpg',
			  'created_at' => date('Y-m-d H:i:s'),
			  'updated_at' => date('Y-m-d H:i:s'),
			],

		]);
    }
}
