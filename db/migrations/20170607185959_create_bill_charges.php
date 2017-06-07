<?php

use Phinx\Migration\AbstractMigration;

class CreateBillCharges extends AbstractMigration
{
    public function up()
    {
        $this->table('bill_charges')
            ->addColumn('billing_date', 'datetime')
            ->addColumn('value', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    public function down()
    {
        $this->dropTable('bill_charges');
    }
}
