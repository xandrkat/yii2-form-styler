<?php

namespace tests\jquery\magnificpopup;

use yii\helpers\FileHelper;
use yii\jquery\formstyler\FormStylerAsset;
use yii\codeception\TestCase;
use Yii;

class FormStylerAssetTest extends TestCase
{

    public $appConfig = '@tests/jquery/formstyler/config.php';

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        parent::setUp();
        foreach (glob(Yii::$app->getAssetManager()->basePath . DIRECTORY_SEPARATOR . '*', GLOB_ONLYDIR) as $dir) {
            FileHelper::removeDirectory($dir);
            $this->assertFalse(is_dir($dir));
        }
    }

    public function testBundle()
    {
        $bundle = Yii::$app->getAssetManager()->getBundle(FormStylerAsset::className());
        $this->assertInstanceOf('yii\jquery\formstyler\FormStylerAsset', $bundle);
        $this->assertArrayHasKey(0, $bundle->js);
        $this->assertFileExists($bundle->basePath . DIRECTORY_SEPARATOR . $bundle->js[0]);
        $this->assertArrayHasKey(0, $bundle->css);
        $this->assertFileExists($bundle->basePath . DIRECTORY_SEPARATOR . $bundle->css[0]);
    }
}
