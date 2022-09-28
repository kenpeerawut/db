<?php include "connect.php"; ?> 
<html>
<head><meta charset="utf-8" ></head>
<body>

<?php
   $stmt = $pdo->prepare("SELECT *FROM member");
   $stmt->execute();
?>

<?php while($row = $stmt->fetch()):?>
   ชื่อสมาชิก: <?=$row["name"]."<br>"?>
   ที่อยู่: <?=$row["address"]."<br>"?>
   อีเมล์:<?=$row["email"]."<br>"?>
   <div style="padding:1px;">
    <img src='img/<?=$row["username"]?>.jpg'width='100'>
   </div>
   <hr>
<?php endwhile;?>
</div>
   

   


</body>
</html>