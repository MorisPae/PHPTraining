<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>管理画面</title>
    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
    <h1>管理画面</h1>
    <p>お問い合わせ情報</p>
    <table class = "main">
        <tr>
            <th class = "c">No.</th>
            <th class = "c">性</th>
            <th class = "c">名</th>
            <th class = "c">性別</th>
            <th class = "c">住所</th>
            <th class = "c">電話番号</th>
            <th class = "c">メールアドレス</th>
            <th class = "c">どこで知ったか</th>
            <th class = "c">質問カテゴリ</th>
            <th class = "c">質問内容</th>
        </tr>
    </td?>
    <div>
        <?php
            $lines = file("contact=contents.csv");
            foreach($lines as $line) {
                $data = explode(",", $line);
            }
            $fp = fopen("contact=contents.csv", "r");
            while (($data = fgetcsv($fp)) !== false) {
                print
                "<tr>
                    <td class = \"c\">$data[0]</td>
                    <td class = \"c\">$data[1]</td>
                    <td class = \"c\">$data[2]</td>
                    <td class = \"c\">$data[3]</td>
                    <td class = \"c\">$data[4]</td>
                    <td class = \"c\">$data[5]</td>
                    <td class = \"c\">$data[6]</td>
                    <td class = \"c\">$data[7]</td>
                    <td class = \"c\">$data[8]</td>
                    <td class = \"c\">$data[9]</td>
                </tr>";


            }
         ?>
    </td?>
</body>
</html>
