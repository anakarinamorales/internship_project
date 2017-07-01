<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class BillAlertsSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $billsList = $this->fetchAll('SELECT id FROM bills');

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'status' => $faker->randomElement($array = array('Visualizado', 'Não visualizado', 'Concluído')),
				'bill' => $billsList[$value]['id'],
        	];
        }

        $this->insert('bill_alerts', $data);
    }
}