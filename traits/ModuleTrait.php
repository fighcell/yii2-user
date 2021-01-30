<?php

namespace fighcell\user\traits;

use fighcell\user\Module;

/**
 * Trait ModuleTrait
 *
 * @property-read Module $module
 * @package fighcell\user\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('user');
    }

    /**
     * @return string
     */
    public static function getDb()
    {
        return \Yii::$app->getModule('user')->getDb();
    }
}
