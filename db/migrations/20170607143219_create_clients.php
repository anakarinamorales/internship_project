<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateClients extends AbstractMigration
{
    public function up()
    {
        $this->table('clients')
            //Colunas
            ->addColumn('first_name', 'string')
            ->addColumn('surname', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->addColumn('address', 'integer')
            
            //Chaves estrangeiras
            ->addForeignKey('address', 'adresses', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'))

            ->save();
    }

    public function down()
    {
        $this->dropTable('clients');
    }
}