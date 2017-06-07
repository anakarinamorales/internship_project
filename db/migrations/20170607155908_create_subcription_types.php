<?php

use Phinx\Migration\AbstractMigration;

class CreateSubcriptionTypes extends AbstractMigration
{
    public function up()
    {
        $this->table('subscription_types')
            ->addColumn('description', 'string')
            ->addColumn('discount', 'string')
            ->save();
    }

    public function down()
    {
        $this->dropTable('subscription_types');
    }
}
