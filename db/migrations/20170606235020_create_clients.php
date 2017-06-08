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
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();

        $refTable = $this->table('adresses');
        $refTable->addColumn('address', 'integer')
            ->adForeignKey('address', 'adresses', 'id', array('delete'=>'SET_NULL', 'update'=>'NO_ACTION'))
            ->save();


    }


    public function down()
    {
        //$this->dropTable('clients');
    }
}
