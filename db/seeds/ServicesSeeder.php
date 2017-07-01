<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class ServicesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'description' => $faker->randomElement($array = array('Hospedagem', 'Email', 'Hospedagem e Email')),
				'value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
        	];
        }

        $this->insert('services', $data);
    }
}
