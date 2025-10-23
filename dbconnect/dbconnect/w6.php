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
        <input type="text" name="username">
        <button>submit</button>
    </form>

    <?php
        $stmt = $pdo->prepare("DELETE FROM member WHERE username = ?");

        if (!empty($_GET)) 
            $keyword = $_GET["username"];

        $stmt->bindParam(1, $keyword);
        
        if ($stmt->execute());
            echo "ลบ user " . $keyword . " สำเร็จ"
    ?>
</body>
</html>