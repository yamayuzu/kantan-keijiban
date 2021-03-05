<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css"> 
    <style>
    </style>
</head>
<body>
<b>
<?php

header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once("../db_info.php");

try { 
$dbh = new PDO($dsn);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // この下にプログラムを書きましょう。
$c = $_POST["bangou"];
$dbh->query("DELETE FROM keijibanY WHERE bangou = '$c'");

print $c;
print "を削除しました。";

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

</b>

<a href="http://127.0.0.1:8080/keijiban/keijiban.html">戻る</a>
</body>
</html>