<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $PLACE = new Place(NULL);
    $VALID = new Validator();

    $PLACE->title = $_POST['title'];
    $PLACE->short_description = $_POST['short_description'];
    $PLACE->description = $_POST['description'];

    $dir_dest = '../../upload/place/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 360;
        $handle->image_y = 255;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PLACE->image_name = $imgName;
    $PLACE->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
 }

 if (isset($_POST['update'])) {
    $dir_dest = '../../upload/place/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 360;
        $handle->image_y = 255;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PLACE = new Place($_POST['id']);

    $PLACE->image_name = $_POST['oldImageName'];
    $PLACE->title = $_POST['title'];
    $PLACE->short_description = $_POST['short_description'];
    $PLACE->description = $_POST['description'];
    $PLACE->update();
   

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $PLACE = Place::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}