<?php

namespace common\libs;

use Yii;

//use Imagine\Gmagick\Image;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Images {

    public static function BlurImage($fileImage, $radius = 80, $sigma = 100) {
//        $basePath = Yii::$app->params['upload']['basePath'];
        $basePath = '/home/imuzik4g/apps/imuzik4g/wap/web/uploads';
        $imagePath = $basePath . $fileImage;
        if (is_file($imagePath)) {
            $image = new \Imagick($imagePath);
            $image->blurImage($radius, $sigma);
            $file = explode('/', $imagePath);
            $i = 0;
            $filePath = '';
            while ($i < sizeof($file) - 1) {
                $filePath .= $file[$i] . '/';
                $i ++;
            }
            $filePath = $filePath . md5(time()) . '.png';
            try{
            $image->writeimage($filePath);
                
            }catch(yii\db\Exception $e){
                echo $e->getMessage();
                return '';
            }
//            echo "\n$filePath \n";
            $filePath = explode($basePath, $filePath);
//            echo $filePath[1]."\n";

            return $filePath[1];
        }
        return '';
    }

}
