<?php include "../connect.php"; ?>

<?php
    $targetDir = "../product_images/";
    if(!is_dir($targetDir)){
        mkdir($targetDir, 0755, true);
    }

    $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $imagePath = $_POST["pname"] . "." . $ext;
    $targetFile = $targetDir . $imagePath;

    if ($_FILES["image"]["error"] !== 0) {
        echo "Upload error code: " . $_FILES["image"]["error"];
        exit;
    }


    // upload file
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)){
        $stmt = $pdo->prepare("INSERT INTO product (pname, pdetail, price) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $_POST["pname"]);
        $stmt->bindParam(2, $_POST["pdetail"]);
        $stmt->bindParam(3, $_POST["price"]);

        $stmt->execute();
        $pid = $pdo->lastInsertId();

        header("Location: response.php?pid=$pid&img=" . urlencode($targetFile));
    }else{
        echo "อัปโหลดรูปสินค้าไม่สำเร็จ";
    }

?>