<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class ServicesClientsSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $clientsList = $this->fetchAll('SELECT id FROM clients');
        $servicesList = $this->fetchAll('SELECT id FROM services');
        $subscriptionTypesList = $this->fetchAll('SELECT id FROM subscription_types');
        $paymentMethodsList = $this->fetchAll('SELECT id FROM payment_methods');

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'subscription_date' => date('Y-m-d'),
				'client' => $clientsList[$value]['id'],
				'service' => $faker->numberBetween($min = 1, $max = sizeof($servicesList)),
				'subscription_type' => $faker->numberBetween($min = 1, $max = sizeof($subscriptionTypesList)),
				'payment_method' => $paymentMethodsList[$value]['id']
        	];
        }

        $this->insert('services_clients', $data);
    }
}
