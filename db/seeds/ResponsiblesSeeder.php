<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class ResponsiblesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'name' => $faker->firstName,
				'phone' => $faker->phoneNumber,
				'email' => $faker->email
        	];
        }

        $this->insert('responsibles', $data);
    }
}
