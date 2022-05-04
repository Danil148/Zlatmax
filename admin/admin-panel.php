<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-style.css">
    <title>Админ панель</title>
</head>
<body>
    <span>Создать товар в магазине</span>
    <form action="../php/create-plach.php" enctype="multipart/form-data">
        <input type="file" name="image" class="">
        <input type="text" placeholder="Заголовок" name="header">
        <input type="text" placeholder="Описание" name="opic">
        <input type="text" placeholder="Цена" name="cen">
        <button type="submit" name="done">Подтвердить</button>
    </form>
</body>
</html>

<?php 



?>