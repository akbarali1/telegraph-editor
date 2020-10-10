<?php
header('Content-Type: text/json; charset=utf-8');
if (isset($_POST['author'])) {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $author = isset($_POST['author']) ? trim($_POST['author']) : '';
    $time = isset($_POST['time']) ? trim($_POST['time']) : '';
    $text = isset($_POST['text']) ? trim($_POST['text']) : '';

    $out = array('success' => $name,'author' => $author, 'text' => $text);
    echo json_encode($out);
}