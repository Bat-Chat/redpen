<?php

namespace frontend\controllers;

use yii\rest\ActiveController;

class ProjectController extends ActiveController
{
    // указываем класс модели, который будет использоваться
    public $modelClass = 'common\models\Project';

    public function behaviors()
    {
        return 
        \yii\helpers\ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
            ],
            // 'verbs' => [
            //     'class' => \yii\filters\VerbFilter::className(),
            //     'actions' => [
            //         'index' => ['get'],
            //         'view' => ['get'],
            //         'create' => ['get','post'],
            //         'update' => ['get','put'],
            //         'delete' => ['delete']
            //     ]
            // ], 
        ]);
    }
}