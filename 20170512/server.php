<?php
    //どんなサーバ変数が使えるか知る
    foreach($_SERVER as $server_key => $server_val) {
        // echo $server_key."<br />\n";
    }
    //サーバ変数の使い方
    $_SERVER['PHP_SELF'];

    //現在実行しているスクリプトのファイル名です。ドキュメントルートから取得されます。
    print $_SERVER["PHP_SELF"]."<br />\n";
    //ファイルの絶対パスの表示
    print __FILE__."<br />\n";

    //host名の取得
    echo $_SERVER["SERVER_NAME"]."nl2br<br>";

    //ユーザが利用しているブラウザの情報
    echo $_SERVER["HTTP_USER_AGENT"]."<br />";

    //どのページのリンクをたどってきたか取得できる。
    echo $_SERVER["HTTP_REFERER"]."<br />";
 ?>
