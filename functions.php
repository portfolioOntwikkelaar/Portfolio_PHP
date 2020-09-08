<?php
function createFolder($path)
{
    if (!file_exists($path)) {
        mkdir($path, 0755, TRUE);
    }
}

function createThumbnail($sourcePath, $targetPath, $file_type, $thumbWidth, $thumbHeight){

    $source = imagecreatefromjpeg($sourcePath);

    $width = imagesx($source);
    $height = imagesy($source);

    $tnumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);

    imagecopyresampled($tnumbImage, $source, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);

    if (imagejpeg($tnumbImage, $targetPath, 90)) {
        imagedestroy($tnumbImage);
        imagedestroy($source);
        return TRUE;
    } else {
        return FALSE;
    }
}
?>
