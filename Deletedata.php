<?php include "connect.php"?>
<html>
<head><meta charset="utf-8">
<script>
    function confirmDelete(pid)
    {
        var ans = confirm("ต้องการลบสินค้ารหัส"+pid);
        if(ans==true)
           document.location = "delete.php?="+pid;
    }
</script>
</head>
<body>
    <?php
      $stmt = $pdo->prepare("SELECT * FROM product");
      $stmt->execute();

      while($row = $stmt->fetch()){
        echo "รหัสสินค้า:" .$row["pid"]."<br>";
        echo "ชื่อสินค้า:" .$row["pname"]."<br>";
        echo "รายละเอียดสินค้า:" .$row["pdetail"]."<br>";
        echo "ราคา:".$row["price"]."<br>";
        echo "<a href='editform.php?pid=".$row["pid"].">แก้ไข</a> | ";
        echo "<a href='#' onclick='confirmDelete(".$row["pid"].")'>ลบ</a>";
        echo "<hr>\n";
      }
    ?>


</body>
</html>