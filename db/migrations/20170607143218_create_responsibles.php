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
            ->addColumn('responsible_name', 'string')
            ->addColumn('responsible_surname', 'string')
            ->addColumn('responsible_phone', 'string')
            ->addColumn('responsible_email', 'string')

            //Created_at e updated_at
            ->addTimestamps()
            
            ->save();
    }

    public function down()
    {
         $this->dropTable('responsibles');
    }
}