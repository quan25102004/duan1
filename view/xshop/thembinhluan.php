<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="index.php?url=thembinhluan" method="post">
<input type="hidden" name="ma" value="<?= $ma[0]['idSP'] ?>"> -->
        <input type="hidden" name="idKH" value="<?= $binhluan[0]['idKH'] ?>">
        <input type="hidden" name="idSP" value="<?= $binhluan[0]['idSP'] ?>">
        <input type="text" name="noidung" style="width: 70%;" placeholder="Hãy điền tên vào đây">
        <button type='submit' style="width: 29%;">Gui Binh Luan</button>
      <!-- </form> -->
</body>
</html>