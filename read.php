<?php

// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}

// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイル開く
$fp = fopen($filename, 'r');    //"r"=引数：読み込みのみでオープンする
 
// whileで行末までループ処理
// feofはデータの最終行にいくまでfgetsの処理を繰り返させるwhile関数を機能させる関数
while (!feof($fp)) {
 
    // fgetsでファイルを読み込み、変数に格納
    // fgetsは1行づつしか読み込めない
    $txt = fgets($fp);
   
    // ファイルを読み込んだ変数を出力
    echo h($txt).'<br>';
   
}
 
// fcloseでファイルを閉じる
fclose($fp);





?>