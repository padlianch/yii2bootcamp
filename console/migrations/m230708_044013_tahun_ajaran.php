<?php

use yii\db\Migration;

/**
 * Class m230708_044013_tahun_ajaran
 */
class m230708_044013_tahun_ajaran extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('tahun_ajaran', [
            'id' => $this->primaryKey(),
            'tahun_mulai' => $this->integer(),
            'tahun_selesai' => $this->integer(),
            'status_berjalan' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tahun_ajaran');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230708_044013_tahun_ajaran cannot be reverted.\n";

        return false;
    }
    */
}
