<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

namespace appfront\local\local_modules\water\controllers;

use appfront\local\local_modules\water\controllers\PublicsController;
use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;
use yii\mongodb\Query;


/**
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */

// 水司首页控制器
class GoodsController extends PublicsController
{

    public function init()
    {
        parent::init();
        // 加载模板页面
        Yii::$service->page->theme->layoutFile = 'water.php';
    }

    //返回商品列表
    public function actionIndex(){

        return $this->render($this->action->id);

    }

    //返回用户评价
    public function actionCommentlist(){

        return $this->render($this->action->id);

    }
    
}