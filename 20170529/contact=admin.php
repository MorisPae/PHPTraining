<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>管理画面</title>
    <link rel = "stylesheet" href = "styles0.css">
</head>
<body>
    <h1>管理画面</h1>
    <div class="info">お問い合わせ情報</div>
    <table class = "admin">
        <tr class="tablehead">
            <th class="cell0">受付番号</th>
            <th class="cell1">氏名</th>
            <th class="cell2">性別</th>
            <th class="cell3">住所</th>
            <th class="cell4">電話番号</th>
            <th>メールアドレス</th>
            <th>どこで知ったか</th>
            <th>質問カテゴリ</th>
            <th>質問内容</th>
        </tr>
        <div>
            <?php
                $lines = file("contact=contents.csv");
                foreach($lines as $line) {
                    $data = explode(",", $line);
                }
                $fp = fopen("contact=contents.csv", "r");
                while (($data = fgetcsv($fp)) !== false) {
                    print
                    "<tr class=\"cell\">
                        <td class = \"cell0\">$data[0]</td>
                        <td class = \"cell1\">$data[1]$data[2]</td>
                        <td class = \"cell2\">$data[3]</td>
                        <td class = \"cell3\">$data[4]</td>
                        <td class = \"cell4\">$data[5]</td>
                        <td class = \"cell5\">$data[6]</td>
                        <td class = \"cell6\">$data[7]</td>
                        <td class = \"cell7\">$data[8]</td>
                        <td class = \"cell8\">$data[9]</td>
                    </tr>";
                }
            ?>
        </div>
    </table>
</body>
</html>
