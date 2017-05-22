<!DOCTYPE html>
<html lang = "ja"> <!--言語設定を日本語-->
<head>
    <meta charset = "utf-8"> <!--文字コードの設定-->
    <title>お問い合わせ</title>
    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
    <p>お問い合わせ</p>
    <form action = "contact=form=comfirm.php" method ="post">
        <table>
            <tr>
                <td>性</td>
                <td><input type = "text" name = "Fname" /></td>
            </tr>
            <tr>
                <td>名</td>
                <td><input type = "text" name = "Name" id = "Name" /></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type = "radio" name = "Gender" id = "Man" value = "男" /><label for = "Man">男</label>
                    <input type = "radio" name = "Gender" id = "Woman" value = "女" /><label for = "Woman">女</label>
                    <input type = "radio" name = "Gender" id = "Unknown" value = "不明" /><label for = "Unknown">不明</label>
                </td>
            </tr>
            <tr>
                <td>住所</td>
                <td><input type = "text" name = "Address" size = "48" placeholder = "東京都〇〇区〇〇　〇丁目-〇番-〇〇" /></td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td>
                    <input type = "text" name = "Tnum1" placeholder = "000" size = "4" />-
                    <input type = "text" name = "Tnum2" placeholder = "0000" size = "4" />-
                    <input type = "text" name = "Tnum3" placeholder = "0000" size = "4" />
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td>
                    <input type = "text" name = "Email1" placeholder = "example" />@
                    <input type = "text" name = "Email2" placeholder = "example.com" />
                </td>
            </tr>
            <tr>
                <td>どこで知ったか</td>
                <td>
                    <input type = "checkbox" name = "How_Known[]" id = "Magazine" value = "雑誌" /><label for = "Magazine">雑誌</label>
                    <input type = "checkbox" name = "How_Known[]" id = "Newspaper" value = "新聞" /><label for = "Newspaper">新聞</label>
                </td>
            </tr>
            <tr>
                <td>質問カテゴリ</td>
                <td>
                    <select name = "QCtgry">
                        <option value = "" selected = "selected" /></option>
                        <option value = "ホームページについて">ホームページについて</option>
                        <option value = "その他">その他</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>質問内容</td>
            </tr>
            <tr>
                <td colspan = "2"><textarea name = "Contents" rows = "7" cols = "40" placeholder = "ここに質問内容を記入してください。"></textarea></td>
            </tr>
            <tr>
                <td><input type = "submit" value = "送信"></td>
            </tr>
        </table>
    </form>
</body>
</html>
