<table border = "1">
<?php

    for($i = 1; $i <= 10; $i++) {
        print("<tr>");
        for($j = 1; $j <= 10; $j++) {
            print("<td>".$i * $j."</td>");
        }
        print("</tr>");
    }
 ?>
</table>

<hr>

<table border = "1">
    <?php
        for($i = 1;$i <= 100; $i++) {
            print("<tr>");
            if($i <= 10) {
                print("<td>$i</td>");
            }
            if(10 < $i <= 20) {
                print("<td>$i</td>");
            }
            elseif(20 < $i <= 30) {
                print("<td>$i</td>");
            }
            elseif(30 < $i <= 40) {
                print("<td>$i</td>");
            }
            elseif(40 < $i <= 50) {
                print("<td>$i</td>");
            }
            elseif(50 < $i <= 60) {
                print("<td>$i</td>");
            }
            elseif(60 < $i <= 70) {
                print("<td>$i</td>");
            }
            elseif(70 < $i <= 80) {
                print("<td>$i</td>");
            }
            elseif(80 < $i <= 90) {
                print("<td>$i</td>");
            }
            if(90 < $i <= 100) {
                print("<td>$i</td>");
            }

        }

     ?>
</table>
