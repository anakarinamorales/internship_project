<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateBillCharges extends AbstractMigration
{
    public function up()
    {
        $this->table('bill_charges')
            //Colunas
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