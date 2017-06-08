<?php

use Phinx\Migration\AbstractMigration;

class CreateAdresses extends AbstractMigration
{
    public function up()
    {
        $this->table('adresses')
            ->addColumn('street', 'string')
            ->addColumn('number', 'integer')
            ->addColumn('neighborhood', 'string')
            ->addColumn('city', 'string')
            ->addColumn('state', 'string')
            ->addColumn('country', 'string')
            ->addColumn('postal_code', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();

    }

    public function down()
    {
        $this->dropTable('adresses');
    }
}
