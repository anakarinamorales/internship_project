<?php

use Phinx\Migration\AbstractMigration;

class CreateUser extends AbstractMigration
{
    public function up()
    {
         $this->table('users')
            //Colunas
            ->addColumn('name', 'string')
            ->addColumn('surname', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('accountType', 'string')

            //Created_at e updated_at
            ->addTimestamps()

            ->save();
    }

    public function down()
    {
         $this->dropTable('users');
    }
}