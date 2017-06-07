<?php

use Phinx\Migration\AbstractMigration;

class CreateAdresses extends AbstractMigration
{
    public function up()
    {
        $this->table('adresses')
            ->addColumn('street', 'string')
            ->addColumn('number', 'string')
            ->addColumn('neighborhood', 'string')
            ->addColumn('city', 'string')
            ->addColumn('state', 'string')
            ->addColumn('country', 'string')
            ->addColumn('postal_code', 'string')
            ->save();

    }

    public function down()
    {
        $this->dropTable('adresses');
    }
}
