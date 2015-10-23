<?php

namespace yii\jquery\formstyler;

use yii\web\AssetBundle;

class FormStylerAsset extends AssetBundle
{

    public $sourcePath = '@bower/jquery.form-styler';

    public $depends = ['yii\web\JqueryAsset'];

    public $js = ['jquery.formstyler.min.js'];

    public $css = ['jquery.formstyler.css'];
}
