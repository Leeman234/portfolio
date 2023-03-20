<?php
function CartProductPrint($Cart,$Store){
    echo('
        <div data-id='.$Cart['id'].' class="cartProduct d-flex">
            <div class="picture cartImg"> <img class="picturee" src='.$Cart['img'].' alt=""></div>
                <div class="cartBody">
                    <div class ="d-flex"> 
                    <div class="card-text name characteristic">'.$Cart['name'].'</div>
                    <button data-action="delete" class="bott">Х</button>
                </div>
                <div class ="d-flex">
                    <div id="amount" class="card-text characteristic">'.$Cart['cost'].'</div>
                    <div class="availabilityCart">'.$Cart['availability'].'</div>
                </div>
                <div class="brush d-flex">
                    <button class="bott" data-action="plus">+</button>
                    <button class="bott" data-action="brush" id="brush">'.$Store.'</button>
                    <button class="bott" data-action="minus">-</button>
                </div>
            </div>
        </div>
    ');
}
function ProductPrint($arr){
    echo(
    '<div id="'.$arr['id'].'"data-id="'.$arr['id'].'"class="product d-flex flex-column justify-content-around"> 
        <div class="picture"> <img class="picturee" src="'.$arr['img'].'"></div>
        <div class="title characteristic">'.$arr['name'].'</div>
        <div class="price">
            <a class="a-btn-3">
                <span class="a-btn-3-text">Стоимость</span>
                <span class="a-btn-3-slide-text cost">'.$arr['cost'].'₽</span>
                <span class="a-btn-3-icon-right"><span></span></span>
            </a>
            </div>
        <div class="installments characteristic">'.$arr['installments'].'₽ в месяц (12 месяцев)</div>
        <div class="characteristic">В наличии<div class="hohoho availability">'.$arr['availability'].'</div></div>
        <div class="quantity">
            <div class="brush d-flex">
                <button type="button" class="bott" data-action="plus">+</button>
                <button type="button" class="bott score" id="brush">1</button>
                <button type="button" class="bott" data-action="minus">-</button>
            </div>
        </div>
        <button data-action="cart" type="button" class="addToCart button25">Добавить в корзину</button>
    </div>
    ');
}