<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateBills extends AbstractMigration
{
    public function up()
    {
        $this->table('bills')
            //Colunas
            ->addColumn('billing_date', 'date')
            ->addColumn('due_date', 'date')
            ->addColumn('value', 'float')
            ->addColumn('paid', 'boolean')
            ->addColumn('client', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')

            ->addForeignKey('client', 'clients', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'))

            ->save();
    }

    public function down()
    {
        $this->dropTable('bill_charges');
    }
}