<?php

use Phinx\Migration\AbstractMigration;

class CreatePaymentMethods extends AbstractMigration
{
    public function up()
    {
        $this->table('payment_methods')
            ->addColumn('type', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    public function down()
    {
        $this->dropTable('payment_methods');
    }
}
