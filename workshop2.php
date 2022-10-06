<?php include "connect.php"?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $stmt=$pdo->prepare("SELECT name,address,email FROM member");
        $stmt->execute();

        while($row=$stmt->fetch()):
        ?>
        ชื่อสมาชิก: <?=$row["name"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมลล์: <?=$row["email"]?><br>
        <hr>
        <?php endwhile;?>
    </body>
</html>