<?php

use yii\db\Migration;

/**
 * Class m230708_052338_guru
 */
class m230708_052338_guru extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('guru', [
            'id' => $this->primaryKey(),
            'nama_guru' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropTable('guru');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230708_052338_guru cannot be reverted.\n";

        return false;
    }
    */
}
