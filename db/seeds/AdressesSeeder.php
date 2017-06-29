<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class AdressesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = \Faker\Factory::create();
        $adresses = $this->table('adresses');
        $data=[];

        //seeding data
        foreach(range(1,10) as $value){
        	$data[] = [
				'street' => $faker->streetName,
				'number' => $faker->buildingNumber,
				'neighborhood' => $faker->word,
				'city' => $faker->city,
				'state' => $faker->state,
				'country' => $faker->country,
				'postal_code' => $faker->postcode,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')	
        	];
        }
        $adresses->insert($data)->save();
    }
}
