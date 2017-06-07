<?php

use Phinx\Migration\AbstractMigration;

class CreateBillAlerts extends AbstractMigration
{
    public function up()
    {
        $this->table('bill_alerts')
            ->addColumn('status', 'string')
            ->save();
    }

    public function down()
    {
        $this->dropTable('bill_alerts');
    }
}
