<?php

use Phinx\Migration\AbstractMigration;

class CreateResponsibles extends AbstractMigration
{
    public function up()
    {
        $this->table('responsibles')
            ->addColumn('name', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('email', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    public function down()
    {
        //$this->dropTable('responsibles');
    }
}
