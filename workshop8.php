<?php include "errordb.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member where username like ?");
    if (!empty($_GET["username"])) {
        $value = '%' . $_GET["username"] . '%';
        $stmt->bindParam(1, $value);
        $stmt->execute();
        $row = $stmt->fetch(); ?>
        <div>
            Name : <?= $row["name"] ?><br>
            Address : <?= $row["address"] ?><br>
            Mobile : <?= $row["mobile"] ?><br>
            Email : <?= $row["email"] ?>
        </div>
    <?php } ?>

</body>

</html>