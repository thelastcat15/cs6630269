<?php
include "connect.php";
include "cl.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" metod="GET">
        <input type="text" name="name">
        <button>submit</button>
    </form>

    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");

        
        if (!empty($_GET)) 
            $keyword = "%" . $_GET["name"] . "%";

        $stmt->bindParam(1, $keyword);
        
        $stmt->execute();

        // cl($stmt);

        $i = 1;
        while ($row = $stmt->fetch()) {
            echo "ชื่อสมาชิก: " . $row["name"] . "<br>" .
                "ที่อยู่: " . $row["address"] . "<br>" .
                "อีเมล์: " . $row["email"] . "<br>" .
                "<img src='img/" . $i . ".jpg' width='100'> <br><hr>";
            $i++;
        }
    ?>
</body>
</html>