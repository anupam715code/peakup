<?php
namespace App\Helpers;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FileUpload{

    public function checkExtension(){
        

    }
    
    public static function uploadImage($uploadedInfo, $uploadTo, $max_w = 70, $max_h = 70) 
    {
            ini_set('memory_limit', '500M');
            $userfile_name  = $uploadedInfo->getClientOriginalName();
            $userfile_tmp   = $uploadedInfo->getPathName();
            $userfile_size  = $uploadedInfo->getSize();
            $file_ext       = '.'.$uploadedInfo->getClientOriginalExtension();

            $filename = md5(microtime(true) . rand()) . $file_ext;

            $uploadTarget = $uploadTo . $filename;

            if (!copy($userfile_tmp, $uploadTarget))
                    return false;

            chmod($uploadTarget, 0777);

            if ($max_w != '' && $max_h != '') {
                    $width = self::getWidth($uploadTarget);
                    $height = self::getHeight($uploadTarget);
                    // Scale the image if it is greater than the width set above
                    $scale = self::get_resize_scale($width, $height, $max_w, $max_h);
                    if ($scale != 1) {
                            $uploadTarget = self::resizeImage($uploadTarget, $width, $height, $scale);
                    }
            }

            return $filename;
    }

    public static function getHeight($image) {
            $sizes = getimagesize($image);
            $height = $sizes[1];
            return $height;
    }

    public static function getWidth($image) {
            $sizes = getimagesize($image);
            $width = $sizes[0];
            return $width;
    }

    public static function get_resize_scale($w, $h, $MAX_W = 500, $MAX_H = 500) {
            $factor = 1; //resize factor
            if ($w >= $h) {//landscape
                    if ($w > $MAX_W) {
                            $factor = $MAX_W / $w;
                            if (($h * $factor) > $MAX_H) {
                                    $factor = $MAX_H / $h;
                            }
                    } else {
                            if ($h > $MAX_H) {
                                    $factor = $MAX_H / $h;
                            }
                    }
            } else {	 //portrait
                    if ($h > $MAX_H) {
                            $factor = $MAX_H / $h;
                            if (($w * $factor) > $MAX_W) {
                                    $factor = $MAX_W / $w;
                            }
                    } else {
                            if ($w > $MAX_W) {
                                    $factor = $MAX_W / $w;
                            }
                    }
            }

            return $factor;
    }

    public static function resizeImage($image, $width, $height, $scale) {
            $newImageWidth = ceil($width * $scale);
            $newImageHeight = ceil($height * $scale);
            $newImage = imagecreatetruecolor($newImageWidth, $newImageHeight);
            $size = getimagesize($image);
            $source = "";
            switch ($size[2]) {
                    case 'gif':
                            $source = imagecreatefromgif($image);
                            $save_function = 'imagegif';
                            break;
                    case 'jpeg':
                            $source = imagecreatefromjpeg($image);
                            $save_function = 'imagejpeg';
                            break;
                    case 'png':
                            $source = imagecreatefrompng($image);
                            $save_function = 'imagepng';
                            break;
            }
            if (empty($source))
                    return false;
            imagecopyresampled($newImage, $source, 0, 0, 0, 0, $newImageWidth, $newImageHeight, $width, $height);
            $save_function($newImage, $image);
            chmod($image, 0777);
            return $image;
    }

    public static function deleteImage($imagePath) {

        
           if (file_exists($imagePath)){
                    unlink($imagePath);
                    return true;
            } else {
                    return false;
            }
    }
}
