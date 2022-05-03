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
    <div class="carving__knives">
        <span class="carving__knives__text">Разделочные ножи</span><br>
        <a href="#" class="carving__knives__href">Главная</a><img src="svg/arrow.svg" class="carving__knives__arrow"><a href="shop.php" class="carving__knives__href__shop">Разделочные ножи</a>
    </div>
    <div class="by__popularity">
        <span class="by__popularity__menu">По популярности<img src="svg/arrow-bottom.svg" class="by__popularity__menu__arrow"></span>
    </div>
    <div class="left__menu">
        <span class="left__menu__text">Фильтр товаров</span>
        <span class="left__menu__button__one" id="left__menu__button__one">2000 руб.</span><span class="left__menu__button__two"id="left__menu__button__two">5000 руб.</div></span>
        <input type="range" id="left__menu__range" value="0" min="2000" max="5000">
        <span class="left__menu__text__range">Цена: <span id="left__menu__text__range__price">2000</span></span>
        <div class="left__menu__production">
            <span class="left__menu__production__text">Производство</span>
                <div class="left__menu__production__checkbox">
                <input type="checkbox"><span>Булат Сергей Баранова</span><br>
                    <input type="checkbox"><span>Булат Умерова</span><br>
                    <input type="checkbox"><span>ЗЗОСС</span><br>
                    <input type="checkbox"><span>ЗИК</span><br>
                    <input type="checkbox"><span>ЗЛАТКО</span><br>
                    <input type="checkbox"><span>ЗлатПрофит</span><br>
                    <input type="checkbox"><span>ЗОК</span><br>
                    <input type="checkbox"><span>НБК</span><br>
                    <input type="checkbox"><span>НИКОН</span><br>
                    <input type="checkbox"><span>Оружейник</span><br>
                    <input type="checkbox"><span>РОСоружие</span><br>
                    <input type="checkbox"><span>СТИЛЬ-М</span><br>
                </div>
        </div>
        <div class="left__menu__steel">
            <span class="left__menu__steel__text">Сталь</span>
                <div class="left__menu__steel__checkbox">
                    <input type="checkbox"><span>110X18M-ШД</span><br>
                    <input type="checkbox"><span>40X10C2M (ЭИ-107)</span><br>
                    <input type="checkbox"><span>50X14МФ</span><br>
                    <input type="checkbox"><span>95X18</span><br>
                    <input type="checkbox"><span>AUS-8</span><br>
                    <input type="checkbox"><span>ELMAX</span><br>
                    <input type="checkbox"><span>RWL-34</span><br>
                    <input type="checkbox"><span>Дамаск</span><br>
                    <input type="checkbox"><span>K340</span><br>
                    <input type="checkbox"><span>Литой булат</span><br>
                    <input type="checkbox"><span>Литой булат</span><br>
                    <input type="checkbox"><span>Литой булат</span><br>
                    <input type="checkbox"><span>M390</span><br>
                </div>
        </div>
        <div class="left__menu__handle">
            <span class="left__menu__handle__text">Рукоять</span>
            <div class="left__menu__handle__checkbox">
                    <input type="checkbox"><span>Mercorne</span><br>
                    <input type="checkbox"><span>Березовый кап</span><br>
                    <input type="checkbox"><span>Бубинго</span><br>
                    <input type="checkbox"><span>Граб</span><br>
                    <input type="checkbox"><span>Дуб</span><br>
                    <input type="checkbox"><span>Кап</span><br>
                    <input type="checkbox"><span>RWL-34</span><br>
                    <input type="checkbox"><span>Комбинированная</span><br>
                    <input type="checkbox"><span>Каштан</span><br>
                    <input type="checkbox"><span>Квартопрен</span><br>
                    <input type="checkbox"><span>Кожа-Металл</span><br>
                    <input type="checkbox"><span>Комбинированная</span><br>
            </div>
        </div>
        <div class="left__menu__gilding">
            <span class="left__menu__gilding__text">Золочение</span>
                <div class="left__menu__gilding__checkbox">
                        <input type="checkbox"><span>золочение клинка</span><br>
                        <input type="checkbox"><span>Золочение рисунка на клинке</span><br>
                </div>
        </div>
        <div class="left__menu__total__length__mm">
            <span class="left__menu__total__length__mm__text">Общая длинна, мм</span>
            <span class="left__menu__total__length__mm__one" id="left__menu__total__length__mm__one">100</span><span id="left__menu__total__length__mm__two" class="left__menu__total__length__mm__two">90</span>
            <input type="range" id="left__menu__total__length__mm__range" value="0" min="90" max="100">
            <span id="left__menu__total__length__mm__number">0 ММ</span>
        </div>
        <div class="left__menu__reviews">
            <span class="left__menu__reviews__text">Рейтинг</span>
            <div class="left__menu__reviews__checkbox">
                <input type="checkbox" id="checkbox"><span class="left__menu__reviews__checkbox__star"> ★★★★★ <span class="left__menu__reviews__checkbox__star__number">5/5</span></span><br>
                <input type="checkbox"><span class="left__menu__reviews__checkbox__star"> ★★★★ <span class="left__menu__reviews__checkbox__star__number">4/5</span></span><br>
                <input type="checkbox"><span class="left__menu__reviews__checkbox__star"> ★★★ <span class="left__menu__reviews__checkbox__star__number">3/5</span></span><br>
                <input type="checkbox"><span class="left__menu__reviews__checkbox__star"> ★★ <span class="left__menu__reviews__checkbox__star__number">2/5</span></span><br>
                <input type="checkbox"><span class="left__menu__reviews__checkbox__star"> ★ <span class="left__menu__reviews__checkbox__star__number">1/5</span></span><br>
            </div>
        </div>
    </div>
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
            echo    '<img src="../' . $article['image'] . '" class="plach__image"/>' . '<br>';
            echo    '<a class="plach__name">' . $article['name'] . '</a>' . '<br>';
            echo    '<a class="plach__description">' . $article['description'] . '</a>' . '<br>';
            echo    '<a  class="plach__reviews">' . $article['reviews'] . '</a>' . '<br>';
            echo '<div class="plach__rating" data-toral-value="0">';
            echo    '<div class="plach__rating__item" data-item-value="5">';
            echo    '★';
            echo    '</div>';
            echo    '<div class="plach__rating__item" data-item-value="4">';
            echo    '★';
            echo    '</div>';
            echo    '<div class="plach__rating__item" data-item-value="3">';
            echo    '★';
            echo    '</div>';
            echo    '<div class="plach__rating__item" data-item-value="2">';
            echo    '★';
            echo    '</div>';
            echo    '<div class="plach__rating__item" data-item-value="1">';
            echo    '★';
            echo    '</div>';
            echo '</div>';
            echo    '<a class="plach__price">' . $article['price'] . '</a>' . '<br>';
            echo    '<img src="svg/vs.svg" class="plach__vs">' . '<br>';
            echo    '<img src="svg/like.svg" class="plach__like" name="like">' . '<br>';
            echo '</div>';
        }
    ?>
    <script src="js/shop-js.js"></script>
</body>
</html>