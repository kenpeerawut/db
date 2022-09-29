<?php include "connect.php"; ?> 
<html>
<head><meta charset="utf-8" ></head>
<body>

<?php
   $stmt = $pdo->prepare("SELECT *FROM member");
   $stmt->execute();
?>

<?php while($row = $stmt->fetch()):?>
   ชื่อสมาชิก: <?=$row["name"]?>
   <div style="padding:15px;">
        <a href="detail5-9-2.php?username=<?=$row["username"]?>">
            <img src='img/<?=$row["username"]?>.jpg'width='100'>
        </a><hr>
   </div>
  

<?php endwhile;?>


</body>
</html>