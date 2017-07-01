<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class PaymentMethodsSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'description' => $faker->randomElement($array = array('Boleto', 'Cartão'))
        	];
        }

        $this->insert('payment_methods', $data);
    }
}