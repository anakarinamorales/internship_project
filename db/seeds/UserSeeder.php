<?php
//namespace PROJEst;

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{

    public function run()
    {
        $faker = Faker\Factory::create();

        //seeding data
    	$data[] = [
            'name' => 'João',
            'surname' => 'Ritter',
			'email' => 'teste@teste.com',
			'password' => '123123',
            'accountType' => 'ADM'
    	];

        $this->insert('users', $data);
    }
}
