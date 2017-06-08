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
            ->addColumn('payment_method', 'string')
            ->addColumn('subscription_date', 'datetime')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')

            ->save();
    }

    public function down()
    {
        $this->dropTable('services_clients');
    }
}