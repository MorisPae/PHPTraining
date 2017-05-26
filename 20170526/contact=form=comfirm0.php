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
        if (isset($_POST["$data"] )) {
            echo $_POST["$data"];
        }
    }

    //配列になっている入力値の受け取りと表示
    function post_array($data, $char) {
        if (is_array($_POST["$data"])) {
            echo implode($char, $_POST["$data"]);
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
    <form = action = "contact=form=completed.php" method="post">
        <p class="form0">記入内容をご確認ください。</p>
        <?php
            //完了画面への各値の送信
            print "<input type = \"hidden\" name = \"Fname\" value = ".$_POST["Fname"]." />"; //type="hidden" 非表示データを送信する
            print "<input type = \"hidden\" name = \"Name\" value = ".$_POST["Name"]." />";
            print "<input type = \"hidden\" name = \"Gender\" value = ".$_POST["Gender"]." />";
            print "<input type = \"hidden\" name = \"Address\" value = ".$_POST["Address"]." />";
            print "<input type = \"hidden\" name = \"Tnum1\" value = ".$_POST["Tnum1"]." />";
            print "<input type = \"hidden\" name = \"Tnum2\" value = ".$_POST["Tnum2"]." />";
            print "<input type = \"hidden\" name = \"Tnum3\" value = ".$_POST["Tnum3"]." />";
            print "<input type = \"hidden\" name = \"Email1\" value = ".$_POST["Email1"]." />";
            print "<input type = \"hidden\" name = \"Email2\" value = ".$_POST["Email2"]." />";
            if (isset($_POST["How_Known"])) { //isset — 変数がセットされていること、そして NULL でないことを検査する
                for ($i = 0; $i < count($_POST["How_Known"]); $i++) {
                    print "<input type = \"hidden\" name = \"How_Known[]\" value = ".$_POST["How_Known"][$i]." />";
                } //"How_Known"の配列に値を追加していく処理"
            }
            print "<input type = \"hidden\" name = \"QCtgry\" value = ".$_POST["QCtgry"]." />";
            if (isset($_POST["Contents"])) {
                $_POST["Contents"] = explode("\n", $_POST["Contents"]);
                for ($i = 0; $i < count($_POST["Contents"]); $i++) {
                    print "<input type = \"hidden\" name = \"contents[]\" value = ".str_replace(" ", "&nbsp;", $_POST["Contents"][$i])." />"; //$nbsp;
                }
            }
         ?>
        <!--ページ内容-->
            <div class="form1">
                <div class="items">姓</div>
                <div><?php post("Fname"); ?></div>
            </div>
            <div class="form1">
                <div class="items">名</div>
                <div><?php post("Name"); ?></div>
            </div>
            <div class="form1">
                <div class="items">性別</div>
                <div><?php post("Gender"); ?></div>
            </div>
            <div class="form1">
                <div class="items">住所</div>
                <div><?php post("Address"); ?></div>
            </div>
            <div class="form1">
                <div class="items">電話番号</div>
                <div><?php post("Tnum1"); ?>-<?php post("Tnum2"); ?>-<?php post("Tnum3"); ?></div>
            </div>
            <div class="form1">
                <div class="items">メールアドレス</div>
                <div><?php post("Email1"); ?>@<?php post("Email2"); ?></div>
            </div>
            <div class="form1">
                <div class="items">どこで知ったか</div>
                <div>
                    <?php
                        ini_set("display_errors", 0);
                        post_array("How_Known", ",");
                     ?>
                </div>
            </div>
            <div class="form1">
                <div class="items">質問カテゴリ</div>
                <div><?php post("QCtgry"); ?></div>
            </div>
            <div class="form1">
                <div class="items">質問内容</div>
                <div><?php post_array("Contents", "<br>"); ?></div>
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
