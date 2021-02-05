<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=db1;host=localhost';
$user = 'root';
$password = 'password';

try { 
    $dbh = new PDO($dsn, $user, $password);
    
    // この下にプログラムを書きましょう。

$a = $_POST["namae"];
$b = $_POST["message"];
print $_POST["namae"];
print $_POST["message"];
$dbh->query("INSERT INTO keijiban_tb (namae,message) VALUES('{$a}','{$b}')");


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>