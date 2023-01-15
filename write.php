<?php

//データ取得
$name = $_POST["name"];
$email = $_POST["email"];
$origin = $_POST["origin"];
// $blood_type = $_POST["blood_type"];
$birthday = $_POST["birthday"];

//時間取得
$date = date("Y/m/d H:i:s");

//ファイル読み込み
$file = fopen("./data/data.txt","a");

//ファイルに書き込む
fwrite($file, $date." ". $name." ".$email." ".$origin." ".$blood_type." ".$birthday." "."\n");

//ファイルを閉じる
fclose($file);

//read.phpにリダイレクト
header("Location: read.php");   //ファイルの書き込みから読み込みに移る際に必要な処理？なぜ必要？リダイレクトとは？
exit();



?>