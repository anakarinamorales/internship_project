<?php

use Phinx\Migration\AbstractMigration;

class CreateServicesClients extends AbstractMigration
{
    public function up()
    {
        $this->table('services_clients')
            ->addColumn('payment_method', 'string')
            ->addColumn('subscription_date', 'datetime')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    public function down()
    {
        //$this->dropTable('services_clients');
    }
}
