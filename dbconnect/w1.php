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
    <table border='1'>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียด</th>
            <th>ราคา</th>
        </tr>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM product");
            $stmt->execute();

            while ($row = $stmt->fetch()) {
                echo "<tr>" . 
                    "<td>" . $row["pid"] . "</td>" .
                    "<td>" . $row["pname"] . "</td>" .
                    "<td>" . $row["pdetail"] . "</td>" .
                    "<td>" . $row["price"] . "</td>" .
                "</tr>";
            }
        ?>
    </table>
</body>
</html>