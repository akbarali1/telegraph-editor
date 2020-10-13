<?php
/*
 * Kod akbarali tomonidan yozildi
 * Akbarali bilan bog`lanish akbarali@uzhackersw.uz 
 * Sana 13-oktyabt 2020 yil
*/
$host = 'localhost';
$db = 'telegraph';
$user = 'root';
$pass = 'root';
$port = "3306";
$charset = 'utf8mb4';
$options = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, \PDO::ATTR_EMULATE_PREPARES => false, ];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new \PDO($dsn, $user, $pass, $options);
}
catch(\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>