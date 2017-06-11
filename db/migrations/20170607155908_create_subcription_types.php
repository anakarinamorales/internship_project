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

            //Created_at e updated_at
            ->addTimestamps()
            
            ->save();
    }

    public function down()
    {
         $this->dropTable('subscription_types');
    }
}