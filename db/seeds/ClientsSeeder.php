<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class ClientsSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');
        $addressesList = $this->fetchAll('SELECT id FROM addresses');
        $responsiblesList = $this->fetchAll('SELECT id FROM responsibles');

        //seeding data
        foreach(range(0, 9) as $value) {
        	$data[] = [
				'first_name' => $faker->firstName,
				'surname' => $faker->lastName,
                'cpf_cnpj' => $faker->cpf(false),
				'phone' => $faker->phoneNumber,
                'email' => $faker->email,
				'address' => $addressesList[$value]['id'],
				'responsible' => $responsiblesList[$value]['id'],
        	];
        }

        $this->insert('clients', $data);
    }
}
