<!DOCTYPE html>
<html lang = "ja"> <!--言語設定を日本語-->
<head>
    <meta charset = "utf-8"> <!--文字コードの設定-->
    <title>お問い合わせ</title>
    <link rel = "stylesheet" href = "styles.css"> <!--CSSファイルを適用させる-->
</head>
<body>
    <div class = "main">
        <p>お問い合わせ</p>
        <form action = "contact=form=comfirm.php" method ="post"> <!--postの送信先-->
            <!--入力欄-->
            <div>
                <div>性</div>
                <div><input required type = "text" name = "Fname" /></div> <!--requiredは必須入力欄にできる-->
            </div>
            <div>
                <div>名</div>
                <div><input required type = "text" name = "Name" id = "Name" /></div>
            </div>
            <div>
                <div>性別</div>
                <div>
                    <input type = "radio" name = "Gender" id = "Man" value = "男" /><label for = "Man">男</label> <!--labelはテキストもクリック可能にする-->
                    <input type = "radio" name = "Gender" id = "Woman" value = "女" /><label for = "Woman">女</label>
                    <input type = "radio" name = "Gender" id = "Unknown" value = "不明" /><label for = "Unknown">不明</label>
                </div>
            </div>
            <div>
                <div>住所</div>
                <div><input type = "text" name = "Address" size = "48" placeholder = "東京都〇〇区〇〇　〇丁目-〇番-〇〇" /></div> <!--placeholderは入力欄に半透明の例を表示する-->
            </div>
            <div>
                <div>電話番号(半角数字)</div>
                <div>
                    <input required pattern = ^[0-9]+$ type = "text" name = "Tnum1" placeholder = "000" size = "4" />- <!--patternは入力可能な文字を指定できる, +は文字以上, $は末尾を表す正規表現-->
                    <input required pattern = ^[0-9]+$ type = "text" name = "Tnum2" placeholder = "0000" size = "4" />-
                    <input required pattern = ^[0-9]+$ type = "text" name = "Tnum3" placeholder = "0000" size = "4" />
                </div>
            </div>
            <div>
                <div>メールアドレス</div>
                <div>
                    <input required type = "text" name = "Email1" placeholder = "example" />@
                    <input required type = "text" name = "Email2" placeholder = "example.com" />
                </div>
            </div>
            <div>
                <div>どこで知ったか</div>
                <div>
                    <input type = "checkbox" name = "How_Known[]" id = "Magazine" value = "雑誌" /><label for = "Magazine">雑誌</label>
                    <input type = "checkbox" name = "How_Known[]" id = "Newspaper" value = "新聞" /><label for = "Newspaper">新聞</label>
                    <input type = "checkbox" name = "How_Known[]" id = "Others" value = "その他" /><label for = "Others">その他</label>
                </div>
            </div>
            <div>
                <div>質問カテゴリ</div>
                <div>
                    <select name = "QCtgry">
                        <option value = "" selected = "selected" /></option>
                        <option value = "ホームページについて">ホームページについて</option>
                        <option value = "その他">その他</option>
                    </select>
                </div>
            </div>
            <div>
                <div>質問内容</div>
            </div>
            <div>
                <div colspan = "2"><textarea name = "Contents" rows = "7" cols = "40" placeholder = "ここに質問内容を記入してください。"></textarea></div> <!--colspan行の結合-->
            </div>
            <div>
                <div>
                    <input type = "submit" value = "送信"> <!--submit送信ボタン-->
                    <input type = "reset" value = "リセット"> <!--入力値をすべてリセットできるボタンをつける-->
                </div>
            </div>
        </form>
    </div>
</body>
</html>
