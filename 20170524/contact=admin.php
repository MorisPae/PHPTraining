<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>管理画面</title>
    <!--<link rel = "stylesheet" href = "styles.css">-->
</head>
<body>
    <div class = "main">
        <h1>管理画面</h1>
        <p>お問い合わせ情報</p>
        <div>
            <?php
                /*
                $fp = fopen("contact=contents.csv", "r");
                while ($data = fgetcsv($fp, 10000)) {
                    foreach ($data as $d) {
                        print $d."\n";
                    }
                }
                */

                $file = new SplFileObject("contact=contents.csv");
                $file->setFlags(SplFileObject::READ_CSV);
                foreach ($file as $line) {
                    if (is_null($line[0])) {
                        $record[] = $line;
                        print_r($line);
                    }
                }
             ?>
        </div>
    </div>
</body>
</html>
