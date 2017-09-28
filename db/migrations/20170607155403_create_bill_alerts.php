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
            
            //Created_at e updated_at
            ->addTimestamps()

            //Chaves estrangeiras
            ->addForeignKey('bill', 'bills', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))

            ->save();
    }

    public function down()
    {
         $this->dropTable('bill_alerts');
    }
}