<?php

use Phinx\Seed\AbstractSeed;

class ServicesSubscriptionTypesSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $servicesList = $this->fetchAll('SELECT id FROM services');
        $subscriptionTypesList = $this->fetchAll('SELECT id FROM subscription_types');

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'service' => $servicesList[$value]['id'],
				'subscription_type' => $subscriptionTypesList[$value]['id'],
        	];
        }

        $this->insert('services_subscription_types', $data);
    }
}