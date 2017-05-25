<!DOCTYPE html>
<html lang="ja"> <!--言語設定を日本語-->
<head>
    <meta charset="utf-8"> <!--文字コードの設定-->
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="styles0.css"> <!--CSSファイルを適用させる-->
</head>
<body>
    <h1>お問い合わせ</h1>
    <div class="main">
        <form action="contact=form=comfirm.php" method="post"> <!--postの送信先-->
            <!--入力欄-->
            <div class="form0">入力フォーム</div>
            <div class="form1">
                <div class="items">※性</div>
                <div class="inputTxt"><input required type="text" name="Fname" /></div> <!--requiredは必須入力欄にできる-->
            </div>
            <div class="form1">
                <div class="items">※名</div>
                <div class="inputTxt"><input required type="text" name="Name" id="Name" /></div>
            </div>
            <div class="form1">
                <div class="items">※性別</div>
                <div>
                    <input type="radio" name="Gender" id="Man" value="男" /><label for="Man">男</label> <!--labelはテキストもクリック可能にする-->
                    <input type="radio" name="Gender" id="Woman" value="女" /><label for="Woman">女</label>
                    <input type="radio" name="Gender" id="Unknown" value="不明" /><label for="Unknown">不明</label>
                </div>
            </div>
            <div class="form1">
                <div class="items">住所</div>
                <div class="inputTxt"><input type="text" name="Address" size="48" placeholder="東京都〇〇区〇〇　〇丁目-〇番-〇〇" /></div> <!--placeholderは入力欄に半透明の例を表示する-->
            </div>
            <div class="form1">
                <div class="items">※電話番号(半角数字)</div>
                <div class="inputTxt"> <!--patternは入力可能な文字を指定できる, +は文字以上, $は末尾を表す正規表現-->
                    <input required pattern=^[0-9]+$ type="text" name="Tnum1" placeholder="000" size="4" />-<input required pattern=^[0-9]+$ type="text" name="Tnum2" placeholder="0000" size="4" />-<input required pattern=^[0-9]+$ type="text" name="Tnum3" placeholder="0000" size="4" />
                </div>
            </div>
            <div class="form1">
                <div class="items">※メールアドレス</div>
                <div class="inputTxt">
                    <input required type="text" name="Email1" placeholder="example" />@<input required type="text" name="Email2" placeholder="example.com" />
                </div>
            </div>
            <div class="form1">
                <div class="items">どこで知ったか</div>
                <div>
                    <input type="checkbox" name="How_Known[]" id="Magazine" value="雑誌" /><label for="Magazine">雑誌</label>
                    <input type="checkbox" name="How_Known[]" id="Newspaper" value="新聞" /><label for="Newspaper">新聞</label>
                    <input type="checkbox" name="How_Known[]" id="Others" value="その他" /><label for="Others">その他</label>
                </div>
            </div>
            <div class="form1">
                <div class="items">質問カテゴリ</div>
                <div class="inputTxt">
                    <select name="QCtgry">
                        <option value="" selected="selected" /></option>
                        <option value="ホームページについて">ホームページについて</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
            </div>
            <div>質問内容</div>
            <div class="form2"><textarea name="Contents" placeholder="ここに質問内容を記入してください。"></textarea></div> <!--colspan行の結合-->
            <div class="form3">
                <div>
                    <input type="submit" value="送信"> <!--submit送信ボタン-->
                    <input type="reset" value="リセット"> <!--入力値をすべてリセットできるボタンをつける-->
                </div>
            </div>
        </form>
    </div>
</body>
</html>
