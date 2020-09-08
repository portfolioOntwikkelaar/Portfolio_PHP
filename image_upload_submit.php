<?php
require_once('functions.php');

if(isset($_FILES['image_file_input']))
{
    $output['status']=FALSE;
    set_time_limit(0);
    $allowedImageType = array("image/gif",   "image/jpeg",   "image/pjpeg",   "image/png",   "image/x-png"  );

    if ($_FILES['image_file_input']["error"] > 0) {
        $output['error']= "File Error";
    }
    elseif (!in_array($_FILES['image_file_input']["type"], $allowedImageType)) {
        $output['error']= "Invalid image format";
    }
    elseif (round($_FILES['image_file_input']["size"] / 1024) > 4096) {
        $output['error']= "Maximum file upload size is exceeded";
    } else {
        $temp_path = $_FILES['image_file_input']['tmp_name'];
        $file = pathinfo($_FILES['image_file_input']['name']);
        $fileType = $file["extension"];
        $fileName = rand(222, 888) . time() . ".$fileType";

        $small_thumbnail_path = "uploads/small/";
        createFolder($small_thumbnail_path);
        $small_thumbnail = $small_thumbnail_path . $fileName;

        $medium_thumbnail_path = "uploads/medium/";
        createFolder($medium_thumbnail_path);
        $medium_thumbnail = $medium_thumbnail_path . $fileName;

        $large_thumbnail_path = "uploads/large/";
        createFolder($large_thumbnail_path);
        $large_thumbnail = $large_thumbnail_path . $fileName;

        $thumb1 = createThumbnail($temp_path, $small_thumbnail,$fileType, 150, 93);
        $thumb2 = createThumbnail($temp_path, $medium_thumbnail, $fileType, 300, 185);
        $thumb3 = createThumbnail($temp_path, $large_thumbnail,$fileType, 550, 340);

        if($thumb1 && $thumb2 && $thumb3) {
            $output['status']=TRUE;
            $output['small']= $small_thumbnail;
            $output['medium']= $medium_thumbnail;
            $output['large']= $large_thumbnail;
        }
    }
    echo json_encode($output);
}
?>
