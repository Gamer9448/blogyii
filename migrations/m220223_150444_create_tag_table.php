<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tag}}`.
 */
class m220223_150444_create_tag_table extends Migration
{
    public function up()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()
        ]);
    }
  
    public function down()
    {
        $this->dropTable('tag');
    }
}
