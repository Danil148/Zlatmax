<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shop-style.css">
    <title>Магазин ножей</title>
</head>
<body>
    <?php 
    $image = $_POST['image'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $reviews = $_POST['reviews'];
    $price = $_POST['price'];
    require('core/connect.php');

    $query = mysqli_query($connect, "SELECT * FROM products ORDER BY id DESC ");

    while($article = mysqli_fetch_assoc($query)){
        echo '<div class="plach">';
        echo '<img src="../' . $article['image'] . '" class="plach__image"/>' . '<br>';
        echo '<a class="plach__name">' . $article['name'] . '</a>' . '<br>';
        echo '<a class="plach__description">' . $article['description'] . '</a>' . '<br>';
        echo '<a  class="plach__reviews">' . $article['reviews'] . '</a>' . '<br>';
        echo '<a class="plach__price">' . $article['price'] . '</a>' . '<br>';
        echo '</div>';
    }

    ?>
</body>
</html>