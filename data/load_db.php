<?php
 //require_once 'Zend/Db/Adapter/Pdo/Mysql.php';

// $db = new Zend_Db_Adapter_Pdo_Mysql(array(
//     'host'     => '127.0.0.1',
//     'username' => '',
//     'password' => 'xxxxxxxx',
//     'dbname'   => 'test'
// ));

$db = new PDO('sqlite:' . realpath(__DIR__) . '/zftutorial.db');
$fh = fopen(__DIR__ . '/schema.sql', 'r');
while ($line = fread($fh, 4096)) {
    $db->exec($line);
}
fclose($fh);