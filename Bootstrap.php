<?php

namespace tahiaji\migrik;

use yii\base\Application;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['migrik'])) {
                $app->getModule('gii')->generators['migrik'] = 'tahiaji\migrik\gii\Generator';
            }
        }
    }
}
