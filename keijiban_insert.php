<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css"> 
    <style>
         .flex-container {
            display: flex;
            
            flex-direction: column;
        }   
      


    </style>
</head>
<body>
<b>
<div class="flex-container">
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
print "さんが";
print "「";
print $_POST["message"];
print "」を投稿しました";
$dbh->query("INSERT INTO keijiban_tb (namae,message) VALUES('{$a}','{$b}')");


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}S

?>
</div>
<a href="http://127.0.0.1:8080/keijiban/keijiban.html">戻る</a>
<br>
<a href="http://127.0.0.1:8080/keijiban/keijiban_select.php">掲示板へ</a>
</b>
</body>
</html>