<?php include "errordb.php" ?>
<?php
$stmt = $pdo->prepare("insert into member values(?,?,?,?,?,?)");
$stmt->bindParam(1, $_GET["username"]);
$stmt->bindParam(2, $_GET["password"]);
$stmt->bindParam(3, $_GET["name"]);
$stmt->bindParam(4, $_GET["address"]);
$stmt->bindParam(5, $_GET["mobile"]);
$stmt->bindParam(6, $_GET["email"]);
$stmt->execute();
header("location:workshop8.php?username=".$_GET["username"]);
?>