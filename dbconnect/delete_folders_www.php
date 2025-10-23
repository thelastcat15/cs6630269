<?php
$secret = "6630269?";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["secret"] === $secret) {
        @unlink("./member_images");
        @unlink("./product_images");
        
        echo "✅ ลบไฟล์เรียบร้อย";
    } else {
        echo "❌ secret ไม่ถูกต้อง";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
    <label>ใส่ secret:</label>
    <input type="password" name="secret">
    <button type="submit">ลบไฟล์</button>
</form>
</body>
</html>
