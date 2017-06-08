<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateBillChargesStatus extends AbstractMigration
{
    public function up()
    {
        $this->table('bill_charges_status')
            //Colunas
            ->addColumn('status_description', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')

            ->save();
    }

    public function down()
    {
        $this->dropTable('bill_charges_status');
    }
}