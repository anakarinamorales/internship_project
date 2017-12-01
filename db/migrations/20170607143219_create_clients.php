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
            ->addColumn('cpf_cnpj', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('email', 'string')
            ->addColumn('address', 'integer')
            ->addColumn('responsible', 'integer')

            //Created_at e updated_at
            ->addTimestamps()
            
            //Chaves estrangeiras
            ->addForeignKey('address', 'addresses', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))
            ->addForeignKey('responsible', 'responsibles', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))

            ->save();
    }

    public function down()
    {
         $this->dropTable('clients');
    }
}