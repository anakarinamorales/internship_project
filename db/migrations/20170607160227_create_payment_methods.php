
<?php

use Phinx\Migration\AbstractMigration;

/**
 * @category DatabaseTable
 *
 * @author ana.machado
 * @since 1.0.0
 */
class CreatePaymentMethods extends AbstractMigration
{
    public function up()
    {
        $this->table('payment_methods')
            //Colunas
            ->addColumn('description', 'string')

            //Created_at e updated_at
            ->addTimestamps()

            ->save();
    }

    public function down()
    {
         $this->dropTable('payment_methods');
    }
}