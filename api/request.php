<?php
/*
 * Kod akbarali tomonidan yozildi
 * Akbarali bilan bog`lanish akbarali@uzhackersw.uz
 * Sana 13-oktyabt 2020 yil
*/
require_once ('db.php');
header('Content-Type: text/json; charset=utf-8');
if (isset($_POST['author'])) {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $author = isset($_POST['author']) ? trim($_POST['author']) : '';
    $text = isset($_POST['text']) ? trim($_POST['text']) : '';
    $time = time();
    //ma'lumotlar bazasini ulab olamiz
    $data = ['name' => $name, 'author' => $author, 'time' => $time, 'text' => $text];
    $sql = "INSERT INTO articles (name, author, time, text) VALUES (:name, :author, :time, :text)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
    //DB kodlari tugadi
    $articlesid = $pdo->lastInsertId();
    $path = 'articles.php?id=' . $articlesid;
    $out = array('success' => $name, 'path' => $path);
    echo json_encode($out);
}
