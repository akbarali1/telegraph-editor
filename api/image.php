<?php
/*
 * Kod akbarali tomonidan yozildi
 * Akbarali bilan bog`lanish akbarali@uzhackersw.uz
 * Sana 13-oktyabt 2020 yil
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_FILES) {
    $extension = $_FILES["file"]["type"];
    //var_dump($_FILES);
    function uploaddb($name, $type) {
        require ('db.php');
        $time = time();
        $data = ['name' => $name, 'type' => $type, 'time' => $time];
        $sql = "INSERT INTO files (name, type, time) VALUES (:name, :type, :time)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        $filesid = $pdo->lastInsertId();
        //DB kodlari tugadi
        return $filesid;
    }
    function upload($string1, $string2) {
        $upload = move_uploaded_file($string1, $string2);
        return $upload;
    }
    function jsonecho($folder, $id, $type) {
        $out = array('src' => "/file/" . $folder . "/" . $id . $type);
        $reply = "[" . json_encode($out) . "]";
        return $reply;
    }
    if ($extension === 'image/jpg' XOR $extension === 'image/png' XOR $extension === 'image/jpeg' XOR $extension === 'image/webp') {
        $filesid = uploaddb("rasm", $extension);
        $upload = upload($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/file/image/" . $filesid . ".png");
        if ($upload) {
            echo jsonecho("image", $filesid, ".png");
        }
        exit();
    }
    if ($extension === 'video/mp4') {
        $filesid = uploaddb("video", $extension);
        $upload = upload($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/file/video/" . $filesid . ".mp4");
        if ($upload) {
            echo jsonecho("video", $filesid, ".mp4");
        }
        exit();
    }
    if ($extension === 'image/gif') {
        $filesid = uploaddb("gif", $extension);
        $upload = upload($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/file/gif/" . $filesid . ".gif");
        if ($upload) {
            echo jsonecho("gif", $filesid, ".gif");
        }
        exit();
    }
    if ($extension) {
        $out = array('error' => "Umuman xato format bu yozuv chiqqaniga o`zim ham haryonman jsda taqiq qo`yilgan edi lekin");
        echo json_encode($out);
    }
} else {
    $out = array('error' => "Nimadur xato bo`ldi");
    echo json_encode($out);
}
?>