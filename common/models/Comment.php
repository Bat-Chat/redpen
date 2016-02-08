<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property integer $image_id
 * @property integer $pin_id
 * @property integer $user_id
 * @property string $text
 *
 * @property User $user
 * @property Image $image
 * @property Pin $pin
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_id', 'pin_id', 'user_id', 'text'], 'required'],
            [['image_id', 'pin_id', 'user_id'], 'integer'],
            [['text'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('comment', 'ID'),
            'image_id' => Yii::t('comment', 'Image ID'),
            'pin_id' => Yii::t('comment', 'Pin ID'),
            'user_id' => Yii::t('comment', 'User ID'),
            'text' => Yii::t('comment', 'Text'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPin()
    {
        return $this->hasOne(Pin::className(), ['id' => 'pin_id']);
    }

    /**
     * @inheritdoc
     * @return CommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommentQuery(get_called_class());
    }
}
