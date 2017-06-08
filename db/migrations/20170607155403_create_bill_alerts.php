<?php

use Phinx\Migration\AbstractMigration;

class CreateBillAlerts extends AbstractMigration
{
    public function up()
    {
        $this->table('bill_alerts')
            ->addColumn('status', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    public function down()
    {
        //$this->dropTable('bill_alerts');
    }
}
