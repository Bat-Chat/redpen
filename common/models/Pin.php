<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pin".
 *
 * @property integer $id
 * @property integer $image_id
 * @property double $x_position
 * @property double $y_position
 *
 * @property Comment[] $comments
 * @property Image $image
 */
class Pin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_id', 'x_position', 'y_position'], 'required'],
            [['image_id'], 'integer'],
            [['x_position', 'y_position'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('pin', 'ID'),
            'image_id' => Yii::t('pin', 'Image ID'),
            'x_position' => Yii::t('pin', 'X Position'),
            'y_position' => Yii::t('pin', 'Y Position'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['pin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_id']);
    }

    /**
     * @inheritdoc
     * @return PinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PinQuery(get_called_class());
    }
}
