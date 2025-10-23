<?php include "../connect.php"; ?>

<?php
$usernameParam = isset($_POST['username']) ? trim($_POST['username']) : '';
$row = null;
$imgPath = "";

if($usernameParam !== '') {
    $member = $pdo->prepare("SELECT * FROM member WHERE username=?");
    $member->bindParam(1, $usernameParam);
    $member->execute();
    $row = $member->fetch();

    if($row) {
        $imgExt = ["jpg", "png", "jpeg"];
        foreach($imgExt as $ext) {
            $testPath = "../member_images/" . $row["username"] . "." . $ext;
            if(file_exists($testPath)){
                $imgPath = $testPath;
                break;
            }
        }
        if($imgPath === "") {
            $imgPath = "../member_images/default.png";
        }
    } else {
        $error = "ไม่พบสมาชิกนี้";
    }
} elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = "กรุณากรอก username";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW 12 - ดูสมาชิก</title>
</head>
<body>
    <h2>ค้นหาสมาชิก</h2>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required>
        <button type="submit">ค้นหา</button>
    </form>

    <?php if(isset($error)): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if($row): ?>
        <div style="display:flex; align-items:flex-start; margin-top:20px;">
            <div>
                <img src="<?= htmlspecialchars($imgPath) ?>" width="200" alt="<?= htmlspecialchars($row["username"]) ?>">
            </div>
            <div style="padding:15px">
                <h2><?= htmlspecialchars($row["name"]) ?></h2><br>
                ที่อยู่: <?= htmlspecialchars($row["address"]) ?><br>
                อีเมลล์: <?= htmlspecialchars($row["email"]) ?><br>
                เบอร์โทร: <?= htmlspecialchars($row["mobile"]) ?><br>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>
