<?php

use yii\db\Migration;


/**
 * Handles adding columns to table `{{%category}}`.
 */
class m220310_141954_add_title_column_to_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category}}', 'title', $this->string(64));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%category}}', 'title');
    }
}
