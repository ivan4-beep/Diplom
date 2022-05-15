let cart = {}; 

function init() {
    $.getJSON("goods.json", goodsOut);
}

function goodsOut(data) {

    let out='';
    for (let key in data) {
        out +='<div class="tovar__item">';
        out +=`<img src="./img/${data[key].img}">`;
        out +=`<span>${data[key].name}</span>`;
        out +=`<span class="cost">Ціна: ${data[key].cost}</span>`;
        out +=`<button class="btn_tovar" data-id="${key}">Добавити в Кошик</button>`;
        out +='</div>';
    }
    $('.tovar-content').html(out);
    $('.btn_tovar').on('click', addToCart);
}

 function addToCart() {

    let id = $(this).attr('data-id');
    if (cart[id]==undefined) {
        cart[id] = 1;
    }
    else {
        cart[id]++;
    }
    showMiniCart();
    SaveCart();
}

function showMiniCart() {
    if (!isEmpty(cart)) {
        $('.popup__tovar').html(`
        <div class="popup__tovar">
               <div class="popup__img">
                  <img src="img/modal-cart-dummy.svg" alt="Корзина">
               </div>
               <div class="popup__text">
                  <p class="popup__text__one">Кошик порожній</p>
                  <p class="popup__text__two">Но це ніколи не пізно виправити:)</p>
               </div>
            </div>
        `);
    }
    else {
        $.getJSON('goods.json', function (data) {
            var goods = data;
            var out = '';
            for (var id in cart) {
                out += `<a class="del-tovar" data-id="${id}">x</a>`;
                out += `<img src="img\\${goods[id].img}" class="img__mini">`;
                out += `<span class="tovars">${goods[id].name}</span>`;
                out += `<span class="counts">${cart[id]}</span>`;
                out += `<a class="plus-tovar" data-id="${id}">+</a>`;
                out += `<a class="minus-tovar" data-id="${id}">-</a>`;
                out += `<span class="price">Ціна: ${cart[id]*goods[id].cost} грн</span>`;
                out += '<br>';
            }
            $('.popup__tovar').html(out);
            $('.plus-tovar').on('click', plusGoods);
            $('.minus-tovar').on('click', minusGoods);
            $('.del-tovar').on('click', delGoods);
            $('.popup__continue').html(`<a href="decor.php" class="popup_btn btn" type="button">Продовжити далі</a>`);
        });
    }
}
function sendGmail(){
    let name = $('#name').val();
    let surname = $('#surname').val();
    let gmail = $('#gmail').val();
    let tel = $('#tel').val();
    let citysend = $('#city').val();
    if (name!='' && gmail!='' && tel!=''){
        if(!isEmpty(cart)){
            $.post(
                "core/mail.php",
                {
                    "name": name,
                    "surname": surname,
                    "gmail": gmail,
                    "tel": tel,
                    "city": citysend,
                    "cart": cart
                },
                function(data){
                    if (data==1) {
                        alert('Замовлення відправлено!');
                    }
                    else {
                        alert('Помилка');
                    }
                }
            );
        }
    }
}

function plusGoods(){
    let id = $(this).attr('data-id');

    if(cart[id]){
        cart[id]++;
    }
    SaveCart();
    showMiniCart();
}
function minusGoods(){
    let id = $(this).attr('data-id');

    if(cart[id] > 1){
        cart[id]--;
    }
    SaveCart();
    showMiniCart();
}
function delGoods() {
    //удаляем товар из корзины
    var id = $(this).attr('data-id');

    delete cart[id];
    
    SaveCart();
    showMiniCart();
}

function SaveCart(){
    localStorage.setItem('cart', JSON.stringify(cart));
}
function loadCart(){
    if(localStorage.getItem('cart')){
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}
function isEmpty(object) {
    //проверка корзины на пустоту
    for (var key in object)
    if (object.hasOwnProperty(key)) return true;
    return false;
}

$(document).ready(function () {
    init();
    loadCart();
    $('.send-gmail').on('click', sendGmail);
});

