<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateSubcriptionTypes extends AbstractMigration
{
    public function up()
    {
        $this->table('subscription_types')
            //Colunas
            ->addColumn('description', 'string')
            ->addColumn('discount', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            
            ->save();
    }

    public function down()
    {
        $this->dropTable('subscription_types');
    }
}