<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>確認画面</title>
    <link rel = "stylesheet" href = "styles0.css">
</head>
<body>
<?php
    //入力値の受け取り&表示
    function post($data) {
        if (isset($_POST["$data"] )) { //inset: 変数に値があるかどうか確認
            echo htmlentities($_POST["$data"]); //htmlentities(): タグを文字列として扱う
        }
    }

    //配列になっている入力値の受け取りと表示
    function post_array($data, $char) {
        if (is_array($_POST["$data"])) { //配列かどうか確認
            echo implode($char, $_POST["$data"]);　//指定した$char文字列で配列を結合
        }
    }
?>

    <h1>ご確認画面</h1>
    <div class="steps">
        <div class="otherstep">STEP 1 お問い合わせ</div>
        <div class="spacestep">- - - -</div>
        <div class="nowstep">STEP 2 確認画面</div>
        <div class="spacestep">- - - -</div>
        <div class="otherstep">STEP 3 完了画面</div>
    </div>
    <div class="main">
    <form = action = "contact=form=completed.php" method="post">　<!--データの送信先を完了画面に指定-->
        <div class="form0">記入内容をご確認ください。</div>

        <!-- type="hidden" 非表示データを送信する -->
        <input type="hidden" name="Fname" value="<?= $_POST["Fname"]; ?>">
        <input type="hidden" name="Name" value="<?= $_POST["Name"]; ?>">
        <input type="hidden" name="Gender" value="<?= $_POST["Gender"]; ?>">
        <input type="hidden" name="Address" value="<?= $_POST["Address"]; ?>">
        <input type="hidden" name="Tnum1" value="<?= $_POST["Tnum1"]; ?>">
        <input type="hidden" name="Tnum2" value="<?= $_POST["Tnum2"]; ?>">
        <input type="hidden" name="Tnum3" value="<?= $_POST["Tnum3"]; ?>">
        <input type="hidden" name="Email1" value="<?= $_POST["Email1"]; ?>">
        <input type="hidden" name="Email2" value="<?= $_POST["Email2"]; ?>">
        <?php
            //完了画面への各値の送信
            if (isset($_POST["How_Known"])) : //isset — 変数がセットされていること、そして NULL でないことを検査する
                for ($i = 0; $i < count($_POST["How_Known"]); $i++) :
        ?>
                    <input type="hidden" name="How_Known[]" value="<?= $_POST["How_Known"][$i]; ?>">
                <?php endfor; ?>
            <?php endif; ?>
            <!--How_Known"の配列に値を追加していく処理 -->
        <input type="hidden" name="QCtgry" value="<?= $_POST["QCtgry"]; ?>">
        <?php
            if (isset($_POST["Contents"])) :
                $_POST["Contents"] = explode("\r\n", $_POST["Contents"]);
                foreach ($_POST["Contents"] as &$input) { //&は参照渡し　変換した変数が変わると本体の中身も変わる
                    $input = htmlentities($input);
                }
                for ($i = 0; $i < count($_POST["Contents"]); $i++) :
        ?>
                    <input type="hidden" name="contents[]" value="<?= str_replace(" ", "&nbsp;", $_POST["Contents"][$i]); ?>" />  <!-- $nbsp == 空白; -->
                <?php endfor; ?>
            <?php endif; ?>

        <!--ページ内容-->
            <div class="form1">
                <div class="items">姓</div>
                <div class="inputvalue"><?php post("Fname"); ?></div>
            </div>
            <div class="form1">
                <div class="items">名</div>
                <div class="inputvalue"><?php post("Name"); ?></div>
            </div>
            <div class="form1">
                <div class="items">性別</div>
                <div class="inputvalue"><?php post("Gender"); ?></div>
            </div>
            <div class="form1">
                <div class="items">住所</div>
                <div class="inputvalue"><?php post("Address"); ?></div>
            </div>
            <div class="form1">
                <div class="items">電話番号</div>
                <div class="inputvalue"><?php post("Tnum1"); ?>-<?php post("Tnum2"); ?>-<?php post("Tnum3"); ?></div>
            </div>
            <div class="form1">
                <div class="items">メールアドレス</div>
                <div class="inputvalue"><?php post("Email1"); ?>@<?php post("Email2"); ?></div>
            </div>
            <div class="form1">
                <div class="items">どこで知ったか</div>
                <div class="inputvalue">
                    <?php
                        ini_set("display_errors", 0); //エラーを表示しないようにする
                        post_array("How_Known", ",");
                     ?>
                </div>
            </div>
            <div class="form1">
                <div class="items">質問カテゴリ</div>
                <div class="inputvalue"><?php post("QCtgry"); ?></div>
            </div>
            <div class="form1">
                <div class="items">質問内容</div>
                <div class="textarea1"><?php post_array("Contents", "<br>"); ?></div>
            </div>
        </div>
        <div class="form3">
            <div class="button">
                <input type = "submit" value = "送信">
                <input type = "button" onclick = "history.back()" value = "戻る">
                <a href = "contact=form0.php">未入力状態で書き直す</a>
            </div>
        </div>
        <div class="form3">
        </div>
    </form>
</body>
</html>
