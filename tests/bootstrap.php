<?php

$_SERVER['SCRIPT_NAME'] = '/' . basename(__FILE__);
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@yii/jquery/formstyler', dirname(__DIR__));