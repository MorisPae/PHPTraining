<?php
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
 ?>

<!DOCTYPE html>
<html lang = "ja"> <!--言語設定を日本語-->
<head>
    <meta charset = "utf-8"> <!--文字コードの設定-->
    <title>お問い合わせ</title>
</head>
<body>
    <p>お問い合わせ</p>
    <form class = "main" action = "contact_form_error.php" method ="post">
        <div>
            <label for = "Family_Name">性</label>
            <input type = "text" id = "Family_Name" />
        </div>
        <div>
            <label for = "First_Name">名</label>
            <input type = "text" id = "First_Name" />
        </div>
        <div>
            性別
            <input type = "radio" name = "Gender" id = "Man" value = "男" /><label for = "Man">男</label>
            <input type = "radio" name = "Gender" id = "Woman" value = "女" /><label for = "Woman">女</label>
            <input type = "radio" name = "Gender" id = "Unknown" value = "不明" /><label for = "Unknown">不明</label>
        </div>
        <div>
            住所
            <input type = "text" id = "Address" size = "40" placeholder = "東京都〇〇区〇〇　〇丁目-〇番-〇〇" />
        </div>
        <div>
            電話番号
            <input type = "text" id = "Tell_Number" placeholder = "080" size = "4" />ー
            <input type = "text" id = "Tell_Number" placeholder = "0000" size = "4" />ー
            <input type = "text" id = "Tell_Number" placeholder = "0000" size = "4" />
        </div>
        <div>
            <label for = "Email">メールアドレス</label>
            <input type = "text" id = "Email" />@
            <input type = "text" id = "Email" />
        </div>
        <div>
            どこで知ったか
            <input type = "checkbox" name = "How_Known" id = "Internet" value = "インターネット" /><label for = "Internet">インターネット</label>
            <input type = "checkbox" name = "How_Known" id = "Newspaper" value = "新聞" /><label for = "Newspaper">新聞</label>
        </div>
        <div>
            質問カテゴリ
            <select name = "Qctgry">
                <option value = "0">選択してください</option>
                <option value = "1">ホームページについて</option>
                <option value = "2">その他</option>
            </select>
        </div>
        <div>
            質問内容<br>
            <textarea name = "contents" rows = "6" cols = "40" placeholder = "ここに質問内容を記入してください。"></textarea>
        </div>
        <div>
            <input type = "submit" value = "送信">
        </div>

    </form>
</body>
</html>
