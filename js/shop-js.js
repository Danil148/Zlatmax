// range цены
const left__menu__range = document.getElementById('left__menu__range');
const left__menu__text__range__price = document.getElementById('left__menu__text__range__price');

// кнопки для range цены
const left__menu__button__one = document.getElementById('left__menu__button__one');
const left__menu__button__two = document.getElementById('left__menu__button__two');

//всё что с range mm
const left__menu__total__length__mm__range = document.getElementById('left__menu__total__length__mm__range');
const left__menu__total__length__mm__number = document.getElementById('left__menu__total__length__mm__number');

const left__menu__total__length__mm__one = document.getElementById('left__menu__total__length__mm__one');
const left__menu__total__length__mm__two = document.getElementById('left__menu__total__length__mm__two');

//рейтинг звёзды
const ratingItemList = document.querySelectorAll('.plach__rating__item');
const ratingItemArray = Array.prototype.slice.call(ratingItemList);


ratingItemArray.forEach(item =>
    item.addEventListener('click', () => {
        item.parentNode.dataset.totalValue = item.dataset.itemValue
    })

);


left__menu__total__length__mm__range.addEventListener('input', () => {
    rang = left__menu__total__length__mm__range.value;
    left__menu__total__length__mm__number.innerHTML = rang + 'ММ';
});

left__menu__total__length__mm__one.addEventListener('click', () => {
    left__menu__total__length__mm__range.value = '100';
    left__menu__total__length__mm__number.innerHTML = '100 ММ';
});

left__menu__total__length__mm__two.addEventListener('click', () => {
    left__menu__total__length__mm__range.value = '90';
    left__menu__total__length__mm__number.innerHTML = '90 ММ';
});
// всё с range цены 
left__menu__button__one.addEventListener('click', () => {
    
    left__menu__range.value = '2000'
    left__menu__text__range__price.innerHTML = '2000';
});
left__menu__button__two.addEventListener('click', () => {
    left__menu__range.value = '5000'
    left__menu__text__range__price.innerHTML = '5000';
});
left__menu__range.addEventListener('input', () => {
    rang = left__menu__range.value;
    left__menu__text__range__price.innerHTML = rang;
    
});