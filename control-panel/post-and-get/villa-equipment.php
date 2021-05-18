<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $VILLAEQUIPMENT = new VillaEquipment(NULL);
    $VALID = new Validator();

    $VILLAEQUIPMENT->title = $_POST['title'];
    $VILLAEQUIPMENT->short_description = $_POST['short_description'];
    $VILLAEQUIPMENT->description = $_POST['description'];

    $dir_dest = '../../upload/villa-equipment/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 370;
        $handle->image_y = 250;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $VILLAEQUIPMENT->image_name = $imgName;
    $VILLAEQUIPMENT->create();

    $result = ["id" => $VILLAEQUIPMENT->id];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/villa-equipment/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 370;
        $handle->image_y = 250;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $VILLAEQUIPMENT = new VillaEquipment($_POST['id']);

    $VILLAEQUIPMENT->image_name = $_POST['oldImageName'];
    $VILLAEQUIPMENT->title = $_POST['title'];
    $VILLAEQUIPMENT->short_description = $_POST['short_description'];
    $VILLAEQUIPMENT->description = $_POST['description'];

    $VILLAEQUIPMENT->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $VILLAEQUIPMENT = VillaEquipment::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}