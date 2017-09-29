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
				'responsible_name' => $faker->firstName,
                'responsible_surname' => $faker->lastName,
				'responsible_phone' => $faker->phoneNumber,
				'responsible_email' => $faker->email
        	];
        }

        $this->insert('responsibles', $data);
    }
}
