<?php

use Migrations\AbstractMigration;

class AddRemotePort extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * @return void
     */
    public function change()
    {
        $table = $this->table('audits');
        $table->addColumn('source_remote_port', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->save();
    }
}
