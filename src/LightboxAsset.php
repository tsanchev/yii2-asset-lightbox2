<?php

/*
 * Yii 2 asset for bower LightBox2
 *
 * @link      https://github.com/tsanchev/yii2-asset-lightbox2
 * @package   yii2-asset-lightbox2
 * @license   BSD-3-Clause
 */

namespace tsanchev\lightbox2;

class LightboxAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/lightbox2/dist/';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/lightbox.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/lightbox.css',
    ];
}
