<?php
/*
 * Kod akbarali tomonidan yozildi
 * Akbarali bilan bog`lanish akbarali@uzhackersw.uz 
 * Sana 13-oktyabt 2020 yil
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
var_dump($_FILES);

$extension = $_FILES["file"]["type"];
if ($extension === 'image/jpg' XOR $extension === 'image/png' XOR $extension === 'image/jpeg' XOR $extension === 'image/webp') {
    move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/file/image/aaa.png");
    exit();
}
if ($extension === 'video/mp4') {
    move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/file/video/mp4.mp4");
    exit();
}
if ($extension === 'image/gif') {
    move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/file/gif/gif.gif");
    exit();
}
if($extension){
    $out = array('error' => "Umuman xato format bu yozuv chiqqaniga o`zim ham haryonman jsda taqiq qo`yilgan edi lekin");
    echo json_encode($out);
}

?>