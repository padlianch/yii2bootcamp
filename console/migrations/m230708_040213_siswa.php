<?php

use yii\db\Migration;

/**
 * Class m230708_040213_siswa
 */
class m230708_040213_siswa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('siswa', [
            'id' => $this->primaryKey(),
            'nis' => $this->string(),
            'nama_siswa' => $this->string(),
            'tanggal_lahir' => $this->date(),
            'alamat' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230708_040213_siswa cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230708_040213_siswa cannot be reverted.\n";

        return false;
    }
    */
}
