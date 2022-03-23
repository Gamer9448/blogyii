<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m220223_150346_create_article_table extends Migration
{
    public function up()
    {
        $this->createTable('article',[
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'content'=>$this->text(),
            'date'=>$this->date(),
            'image'=>$this->string(),
            'viewed'=>$this->integer(),
            'user_id'=>$this->integer(),
            'status'=>$this->integer(),
            'category_id'=>$this->integer()
        ]);
    }

    public function down()
    {
        $this->dropTable('arcitle');
    }
}
