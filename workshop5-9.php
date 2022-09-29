<?php include "connect.php"?>
<html>
<head><meta charset="utf-8"></head>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

<div style="display:flex">
  <div>
    <img src='img/<?=$row["username"]?>.jpg'width='100'><hr>
  </div>
  <div style="padding:10px">
    <div style="text-align:center">
        <h2><?=$row["username"]?></h2></div>
    <hr>
    ขื่อสมาชิก:<?=$row["name"]?><br>
    ที่อยู่:<?=$row["address"]?><br>
    อีเมล์:<?=$row["email"]?>
    
  </div>
  
</div>


</html>
