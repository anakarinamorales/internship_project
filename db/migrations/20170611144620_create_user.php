<?php

use Phinx\Migration\AbstractMigration;

class CreateUser extends AbstractMigration
{
    public function up()
    {
         $this->table('users')
            //Colunas
            ->addColumn('username', 'string')
            ->addColumn('password', 'string')

            //Created_at e updated_at
            ->addTimestamps()

            ->save();
    }

    public function down()
    {
         $this->dropTable('users');
    }
}