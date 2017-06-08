<?php

use Phinx\Migration\AbstractMigration;

class CreateSubcriptionTypes extends AbstractMigration
{
    public function up()
    {
        $this->table('subscription_types')
            ->addColumn('description', 'string')
            ->addColumn('discount', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    public function down()
    {
        //$this->dropTable('subscription_types');
    }
}
