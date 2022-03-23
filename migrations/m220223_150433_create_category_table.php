<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m220223_150433_create_category_table extends Migration
{
  public function up()
  {
      $this->createTable('category', [
          'id' => $this->primaryKey(),
      ]);
      $this->addColumn('category', 'title', 'string');
  }

  public function down()
  {
      $this->dropTable('category');
  }
}
