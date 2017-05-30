<!--入力フォーム
1. 送信ボタンを押すと確認画面に移行
2. リセットボタンの追加
3. 姓、名、電話番号、メールアドレスで一つでも未入力で送信すると送信ができず、アラートが出ること。
4. 電話番号に指定したもの以外を入れるとアラートが出て送信しない。
-->

<!DOCTYPE html>
<html lang="ja"> <!--言語設定を日本語-->
<head>
    <meta charset="utf-8"> <!--文字コードの設定-->
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="styles0.css">  <!--CSSファイルを適用させる。 relはlinkの関係を指定、hrefはlink先のファイル名-->
</head>
<body>
    <h1>お問い合わせフォーム</h1>
    <div class="steps">
        <div class="nowstep">STEP 1 お問い合わせ</div>
        <div class="spacestep">- - - -</div>
        <div class="otherstep">STEP 2 確認画面</div>
        <div class="spacestep">- - - -</div>
        <div class="otherstep">STEP 3 完了画面</div>
    </div>
    <div class="main">
        <form action="contact=form=comfirm0.php" method="post"> <!--postの送信先-->
            <!--入力欄-->
            <div class="form0">入力フォーム</div>
            <div class="form1">
                <div class="items"><span class="req">※</span>姓</div>
                <div class="inputTxt"><input required type="text" name="Fname" /></div> <!--requiredは必須入力欄にできる-->
            </div>
            <div class="form1">
                <div class="items"><span class="req">※</span>名</div>
                <div class="inputTxt"><input required type="text" name="Name" id="Name" /></div>
            </div>
            <div class="form1">
                <div class="items"> 性別</div>
                <div class="inputGender">
                    <input type="radio" name="Gender" id="Man" value="男" /><label for="Man">男</label> <!--labelはテキストもクリック可能にする-->
                    <input type="radio" name="Gender" id="Woman" value="女" /><label for="Woman">女</label>
                    <input checked type="radio" name="Gender" id="Unknown" value="不明" /><label for="Unknown">不明</label>
                </div>
            </div>
            <div class="form1">
                <div class="items">住所</div>
                <div class="inputTxt"><input type="text" name="Address" size="48" placeholder="東京都〇〇区〇〇　〇丁目-〇番-〇〇" /></div> <!--placeholderは入力欄に半透明の例を表示する-->
            </div>
            <div class="form1">
                <div class="items"><span class="req">※</span>電話番号(半角数字)</div>
                <div class="inputTxt"> <!--patternは入力可能な文字を指定できる, +は文字以上, $は末尾を表す正規表現-->
                    <input required pattern=^[0-9]{2,4} type="text" name="Tnum1" placeholder="000" size="4" />-<input required pattern=^[0-9]{2,4} type="text" name="Tnum2" placeholder="0000" size="4" />-<input required pattern=^[0-9]{2,4} type="text" name="Tnum3" placeholder="0000" size="4" />
                    <!-- ^: 入力文字列の先頭と一致します。{n,m}:n回以上m以下回繰り返す $: 入力文字列の末尾と一致します。+: 直前のサブ式と 1 回以上一致します。 -->
                </div>
            </div>
            <div class="form1">
                <div class="items"><span class="req">※</span>メールアドレス</div>
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
                    <select name="QCtgry">　<!--セレクトボックス-->
                        <option value="" selected="selected" /></option>
                        <option value="ホームページについて">ホームページについて</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
            </div>
            <div class="contents">質問内容</div>
            <div class="form2"><textarea name="Contents" placeholder="ここに質問内容を記入してください。"></textarea></div> <!--colspan行の結合-->
            <div class="form3">
                <div class="button">
                    <input class="submit" type="submit" value="送信"> <!--submit送信ボタン-->
                    <input class="reset" type="reset" value="リセット"> <!--入力値をすべてリセットできるボタンをつける-->
                </div>
            </div>
        </form>
    </div>
</body>
</html>
