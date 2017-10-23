<?php

use Phinx\Seed\AbstractSeed;

class ServicesSubscriptionTypesSeeder extends AbstractSeed
{

    public function run()
    {
        $servicesOrder = array(1, 1, 1, 2, 2, 3);
        $subscriptionOrder = array(1, 2, 3, 1, 2, 1);

        //seeding data
        foreach(range(0, 5) as $value) {
        	$data[] = [
				'service' => $servicesOrder[$value],
				'subscription_type' => $subscriptionOrder[$value]
        	];
        }

        $this->insert('services_subscription_types', $data);
    }
}