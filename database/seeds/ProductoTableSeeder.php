<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class ProductoTableSeeder extends Seeder {


	public function run()
	{
		$faker = Faker::create();

    for($i = 0; $i < 40; $i ++){
			\DB::table('productos')->insert(array(
	      'nombre'  =>   $faker->company,
	      'precio' =>    $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
	      'descripcion' =>  $faker->address,
	        ));

		}

	}

}
