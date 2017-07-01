<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreateAddresses extends AbstractMigration
{
    public function up()
    {
        $this->table('addresses')
            //Colunas
            ->addColumn('street', 'string')
            ->addColumn('number', 'integer')
            ->addColumn('neighborhood', 'string')
            ->addColumn('city', 'string')
            ->addColumn('state', 'string')
            ->addColumn('country', 'string')
            ->addColumn('postal_code', 'string')

            //Created_at e updated_at
            ->addTimestamps()

            ->save();
    }

    public function down()
    {
         $this->dropTable('addresses');
    }
}