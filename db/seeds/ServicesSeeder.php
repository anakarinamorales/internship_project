<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class ServicesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');
        $typesList = array('Hospedagem', 'Email', 'Hospedagem e Email');

        //seeding data
        foreach(range(0, 2) as $value) {
        	$data[] = [
				'description' => $typesList[$value],
				'value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
        	];
        }

        $this->insert('services', $data);
    }
}
