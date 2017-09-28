<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateServicesClients extends AbstractMigration
{
    public function up()
    {
        $this->table('services_clients')
            //Colunas
            ->addColumn('subscription_date', 'datetime')
            ->addColumn('client', 'integer')
            ->addColumn('service', 'integer')
            ->addColumn('subscription_type', 'integer')
            ->addColumn('payment_method', 'integer')

            //Created_at e updated_at
            ->addTimestamps()

            //Chaves estrangeiras
            ->addForeignKey('client', 'clients', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))
            ->addForeignKey('service', 'services', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))
            ->addForeignKey('payment_method', 'payment_methods', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))
            ->addForeignKey('subscription_type', 'subscription_types', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))

            ->save();
    }

    public function down()
    {
         $this->dropTable('services_clients');
    }
}