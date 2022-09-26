<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

    $stmt = $pdo->prepare("SELECT * FROM product");

    $stmt->execute();

    while($row = $stmt->fetch())
    {
        รหัสสินค้า:<?=$row["pid"]?><br>
        ชื่อสินค้า:<?=$row["pname"]?><br>
        รายละเอียดสินค้า:<?=$row["pdetail"]?><br>
        ราคา:<?=$row["price"]?><br>
    }
?>