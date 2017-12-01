<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class BillsSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');
        $clientsList = $this->fetchAll('SELECT id FROM clients');

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'billing_date' => date('Y-m-d'),
				'due_date' => date("Y-m-d", strtotime('next month')),
				'value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
				'paid' => $faker->numberBetween($min = 0, $max = 1),
				'client' => $clientsList[$value]['id']
        	];
        }

        $this->insert('bills', $data);
    }
}
