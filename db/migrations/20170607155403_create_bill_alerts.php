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
            ->addColumn('status', 'string') //TODO Verificar se precisa limitar este campo
            ->addColumn('bill', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')

            ->addForeignKey('bill', 'bills', 'id', array('delete'=>'NO_ACTION', 'update'=>'NO_ACTION'))

            ->save();
    }

    public function down()
    {
        $this->dropTable('bill_alerts');
    }
}