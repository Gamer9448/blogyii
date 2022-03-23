<?php

namespace app\models;
use app\models\Category;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
    
    public function getArticles()
    {
           return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }

    public function getArticlesCount()
    {
        return $this->getArticles()->count();
    }
}

