<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class SubscriptionTypesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $clientsList = $this->fetchAll('SELECT id FROM clients');

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'description' => $faker->randomElement($array = array('Mensal', 'Semestral', 'Anual')),
				'discount' => $faker->numberBetween($min = 0, $max = 50),
        	];
        }

        $this->insert('subscription_types', $data);
    }
}