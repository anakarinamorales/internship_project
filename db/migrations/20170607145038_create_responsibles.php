<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateResponsibles extends AbstractMigration
{
    public function up()
    {
        $this->table('responsibles')
            //Colunas
            ->addColumn('name', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('email', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            
            ->save();
    }

    public function down()
    {
        $this->dropTable('responsibles');
    }
}