<?php

use Phinx\Migration\AbstractMigration;

class CreateServices extends AbstractMigration
{
    public function up()
    {
        $this->table('services')
            ->addColumn('description', 'string')
            ->addColumn('value', 'string')
            ->save();
    }

    public function down()
    {
        $this->dropTable('services');
    }
}
