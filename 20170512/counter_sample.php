<?php
    $fp = fopen("count.txt", "r+"); //file open　r+は読み込み/書き出し用にopenする
    $count = fgets($fp, 10); //ファイルポインタから1行取得。9桁の値を読み取り、左から9桁まで読み取りが可能
    $count = trim($count); //文字列の先頭および末尾にあるホワイトスペースを取り除く
    $count++; //カウントアップ
    rewind($fp); // ファイルポインタを先頭に戻す
    fputs($fp, $count); //値の書き込み
    fclose($fp); //ファイルを閉じる
    echo 'あなたは '.$count.'人目のお客様です';
 ?>
