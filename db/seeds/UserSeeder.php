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
			'email' => 'teste@teste.com',
			'password' => '123123',
    	];

        $this->insert('users', $data);
    }
}