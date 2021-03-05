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
$dbh = new PDO($dsn);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // この下にプログラムを書きましょう。
    $d = $_POST["search"];
    $aa = $dbh->query("SELECT * FROM keijibanY WHERE message LIKE '$d'");
    while($kekka = $aa->fetch()) {
        print "<div class='box'>";
        print "No.";
        print $kekka[0];
        print " ";
        print $kekka[1];
        print ":";
        print $kekka[2];
        print "<br>";
        print "</div>";
    }


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

<a href="http://127.0.0.1:8080/keijiban/keijiban.html">戻る</a>
</div>
</b>
</body>
</html>