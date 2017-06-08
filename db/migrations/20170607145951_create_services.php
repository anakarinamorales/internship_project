<?php

use Phinx\Migration\AbstractMigration;

class CreateServices extends AbstractMigration
{
    public function up()
    {
        $this->table('services')
            ->addColumn('description', 'string')
            ->addColumn('value', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    public function down()
    {
        $this->dropTable('services');
    }
}
