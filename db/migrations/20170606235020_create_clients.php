<?php

use Phinx\Migration\AbstractMigration;

class CreateClients extends AbstractMigration
{
    public function up()
    {
        $this->table('clients')
            ->addColumn('first_name', 'string')
            ->addColumn('surname', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('address', 'integer')
            ->addForeignKey('address', 'adresses', 'id', array('delete'=>'SET_NULL', 'update'=>'NO_ACTION'))
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }


    public function down()
    {
        $this->dropTable('clients');
    }
}
