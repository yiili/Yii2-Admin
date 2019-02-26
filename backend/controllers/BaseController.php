<?php
/**
 * Yii2-Admin
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   Yii2
 * @author    wangyaxian <1822581649@qq.com>
 * @link      https://github.com/duiying/Yii2-Admin
 */

namespace backend\controllers;

use yii\web\Controller;

/**
 * 基类控制器
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   Yii2
 * @author    wangyaxian <1822581649@qq.com>
 * @link      https://github.com/duiying/Yii2-Admin
 */
class BaseController extends Controller
{
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        if (\Yii::$app->user->isGuest) {
            $this->redirect(['login/login']);
            return false;
        }

        return true;
    }
}