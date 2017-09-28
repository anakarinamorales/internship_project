<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */

class CreateServicesSubscriptionTypes extends AbstractMigration
{
    public function up()
    {
        $this->table('services_subscription_types')
            //Colunas
            ->addColumn('service', 'integer')
            ->addColumn('subscription_type', 'integer')

            //Created_at e updated_at
            ->addTimestamps()

            //Chaves estrangeiras
            ->addForeignKey('service', 'services', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))
            ->addForeignKey('subscription_type', 'subscription_types', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))

            ->save();
    }

    public function down()
    {
         $this->dropTable('services_subscription_types');
    }
}
