<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\shop\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;
/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */


class PublicsController extends AppfrontController
{

   
    public function init()
    {
        parent::init();
         if(!isset($_SESSION["login"])){
             return $this->redirect("/shop/login/index");
         }
    }

    static public function getAddressInfo(){

        $province = Yii::$app->db->createCommand("select * from sys_province")->queryAll();
        $city = Yii::$app->db->createCommand("select * from sys_city")->queryAll();
        $district = Yii::$app->db->createCommand("select * from sys_district ")->queryAll();

        $datas["province"] = $province;
        $datas["city"] = $city;
        $datas["district"] = $district;

        return $datas;
    }
    
}