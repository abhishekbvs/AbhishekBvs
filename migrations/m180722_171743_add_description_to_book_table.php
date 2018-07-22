<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180722_171743_add_description_to_book_table
 */
class m180722_171743_add_description_to_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%book}}','book_desc',Schema::TYPE_STRING.'(256)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
          $this->dropColumn('{{%book}}','book_desc');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180722_171743_add_description_to_book_table cannot be reverted.\n";

        return false;
    }
    */
}
