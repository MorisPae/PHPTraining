<?php
    $player = ["HP" => 100,"ATK" => 40];
    $monster = ["HP" => 100, "ATK" => 10];
    print "playerのHP : ".$player["HP"];
    "<input type = "button" name = "攻撃" value = "" size = "30">";

/*
    while($player["HP"] <= 0 || $monster["HP"] <= 0) {
        $monster["HP"] -= $player["ATK"];
        print("playerの攻撃! monsterの残りHP {$moster["HP"]}");
        $player["HP"] -= $moster["ATK"];
        print("monster $monster["ATK"]の攻撃! playerの残りHP $player["HP"]")
    }
*/
 ?>
