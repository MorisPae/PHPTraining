<?php
    function post($data) {
        if (isset($_POST["$data"] )) {
            echo $_POST["$data"];
        }
    }
    function post_array($data) {
        if (is_array($_POST["$data"])) {
            echo implode(",", $_POST["$data"]);
        }
        //print count($_POST["How_Known"]);
    }
 ?>
<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>確認画面</title>
</head>
<body>
    <h3>確認画面</h3>
    <p>記入内容をご確認ください</p>
    <table>
        <tr>
            <td>性</td>
            <td>
                <?php post("Fname"); ?>
            </td>
        </tr>
        <tr>
            <td>名</td>
            <td>
                    <?php post("Name"); ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?php post("Gender"); ?></td>
        </tr>
        <tr>
            <td>住所</td>
            <td><?php post("Address"); ?></td>
        </tr>
        <tr>
            <td>電話番号</td>
            <td>
                <?php post("Tnum1"); ?>-
                <?php post("Tnum2"); ?>-
                <?php post("Tnum3"); ?>
            </td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td>
                <?php post("Email1"); ?>
                @
                <?php post("Email2"); ?>
            </td>
        </tr>
        <tr>
            <td>どこで知ったか</td>
            <td><?php post_array("How_Known"); ?></td>
        </tr>
        <tr>
            <td>質問カテゴリ</td>
            <td><?php post("QCtgry"); ?></td>
        </tr>
        <tr>
            <td>質問内容</td>
            <td><?php post("Contents"); ?></td>
        </tr>
    </table>
</body>
</html>
