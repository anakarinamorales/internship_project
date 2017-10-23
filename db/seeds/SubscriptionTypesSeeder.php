<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class SubscriptionTypesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $typesList = array('Mensal', 'Semestral', 'Anual');

        //seeding data
        foreach(range(0, 2) as $value) {
        	$data[] = [
				'description' => $typesList[$value],
				'discount' => $faker->numberBetween($min = 0, $max = 50),
        	];
        }

        $this->insert('subscription_types', $data);
    }
}