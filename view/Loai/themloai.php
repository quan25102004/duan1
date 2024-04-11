
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (!isset($_COOKIE['user'])) {
        header('location: ?url=login');
        die;
    }
    ?>
    <div>
           <?php require_once "headerAdmin.php" ?>
           <div>
             <h3 style="margin:10px 5px">Thêm Loại: </h3>
    <div style="margin-left: 10px;">
          <form action="index.php?url=themloai" method='post'>
        Tên Loại
        <input type="text" name='tenloai'>
        <p style="color:red"><?= $error['tenloai'] ?? ''?></p>
        <button type="submit" style="background-color: #ccc; color: #000;padding:0 5px;margin:20px 5px">Thêm</button>
    </form>
    </div>
    </div>
           </div>
   
  
  
</body>
</html>