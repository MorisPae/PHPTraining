<?php
    if(isset($_POST['comment']) == true) {
    $comment = $_POST['comment'];
    echo $comment;
    }
 ?>
 <!DOCTYPE html>
 <html lang = "ja">
 <head>
     <meta charset = "UTF-8">
     <title>フォームからデータを受け取る</title>
 </head>
 <body>
     <h1>フォームデータの送信</h1>
     <form action = "Post.php" method = "post">
     <input type = "text" name = "comment"><br/>
     <input type = "submit" value="送信">
     </form>
 </body>
 </html>
