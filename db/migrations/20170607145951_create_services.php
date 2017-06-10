<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateServices extends AbstractMigration
{
    public function up()
    {
        $this->table('services')
            //Colunas
            ->addColumn('description', 'string')
            ->addColumn('value', 'float')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')

            ->save();
    }

    public function down()
    {
        $this->dropTable('services');
    }
}