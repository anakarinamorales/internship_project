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

            //Created_at e updated_at
            ->addTimestamps()

            ->save();
    }

    public function down()
    {
         $this->dropTable('services');
    }
}