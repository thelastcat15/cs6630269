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
    <style>
        .mr {
            margin: 10px;
        }
    </style>
    <script>
        function confirmDelete(username) {
            var ans = confirm("ต้องการลบ username " + username);
            if (ans==true)
                document.location = "w6.php?username=" + username;
        }
    </script>
</head>
<body>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();

        // cl($stmt);

        $i = 1;
        while ($row = $stmt->fetch()) {
            echo "ชื่อสมาชิก: " . $row["name"] . "<br>" .
                "ที่อยู่: " . $row["address"] . "<br>" .
                "อีเมล์: " . $row["email"] . "<br>" .
                "<img src='img/" . $i . ".jpg' width='100'><br>".
                "<a href='./w5.php?username=" . $row["username"] . "' classname='mr'>Detail</a>";
            ?>
            <input type="button" onclick='confirmDelete("<?=$row['username']?>")' value="delete"><hr>
            <?php
            $i++;
        }
    ?>
</body>
</html>