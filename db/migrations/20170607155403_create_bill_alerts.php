<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateBillAlerts extends AbstractMigration
{
    public function up()
    {
        $this->table('bill_alerts')
            //Colunas
            ->addColumn('status', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')

            ->save();
    }

    public function down()
    {
        $this->dropTable('bill_alerts');
    }
}