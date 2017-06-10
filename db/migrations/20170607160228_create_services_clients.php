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
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')

            //Chaves estrangeiras
            ->addForeignKey('client', 'clients', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'))
            ->addForeignKey('service', 'services', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'))
            ->addForeignKey('payment_method', 'payment_methods', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'))
            ->addForeignKey('subscription_type', 'subscription_types', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'))

            ->save();
    }

    public function down()
    {
        $this->dropTable('services_clients');
    }
}