<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class AddressesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'street' => $faker->streetName,
				'number' => $faker->buildingNumber,
                'others' => $faker->word,
				'neighborhood' => $faker->word,
				'city' => $faker->city,
				'state' => $faker->state,
				'country' => $faker->country,
				'postal_code' => $faker->postcode
        	];
        }

        $this->insert('addresses', $data);
    }
}
