<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\models\Events;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

/**
 * Description of EventController
 *
 * @author iushev
 */
class R5eventsController extends ActiveController
{
    public $modelClass = 'app\models\Events';

//    public function actions()
//    {
//        return ArrayHelper::remove(parent::actions(), 'index');
//    }
//
//    public function actionIndex()
//    {
//        $query = Events::find()->limit(20);
//        return Yii::createObject([
//            'class' => ActiveDataProvider::className(),
//            'query' => $query,
//            'pagination' => false,
//            'sort' => false,
//        ]);
//    }
}
