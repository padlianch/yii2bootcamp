<?php

use yii\db\Migration;

/**
 * Class m230708_063959_kelas_siswa
 */
class m230708_063959_kelas_siswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('kelas_siswa', [
            'id_kelas' => $this->integer()->notNull(),
            'id_siswa' => $this->integer()->notNull(),
        ]);
        $this->addPrimaryKey('kelas_siswa_pk', 'kelas_siswa', ['id_kelas', 'id_siswa']);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230708_063959_kelas_siswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230708_063959_kelas_siswa cannot be reverted.\n";

        return false;
    }
    */
}
