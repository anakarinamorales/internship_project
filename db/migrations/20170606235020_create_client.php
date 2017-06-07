<?php

use Phinx\Migration\AbstractMigration;

class CreateClient extends AbstractMigration
{
    public function up()
    {
        $this->table('clients')
            ->addColumn('id', 'int')
            ->addColumn('first_name', 'string')
            ->addColumn('surname', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();

    }


    public function down()
    {
        $this->dropTable('clients');
    }
}
