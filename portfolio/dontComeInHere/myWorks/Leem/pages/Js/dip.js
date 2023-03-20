import { clearMain } from '../functions/function.js';
import { ajax } from '../functions/function.js';
window.addEventListener('click', function(event){
    // Сщётчик товара
    if(event.target.closest('.product')){
        const brush = event.target.closest('.product').querySelector('#brush').innerText
        const availability = event.target.closest('.product').querySelector('.availability').innerText
        // +
        if(event.target.dataset.action === "plus"){
            if(Number(brush) < Number(availability)){
                event.target.closest('.product').querySelector('#brush').innerText++
            }else{
                alert('Извини но так много в магазине нету')
            }
        }
        // -
        if(event.target.dataset.action === "minus"){
            if(Number(brush) > 1){
                event.target.closest('.product').querySelector('#brush').innerText--
            }else{
                alert('хочешь купить меньше 1?')
            }
        }
        // 0
        if(event.target.closest("#brush")){
            event.target.closest('.product').querySelector('#brush').innerText = 1
        }
    }
    // корзина
    if(event.target.closest('.addToCart')){
        const product = event.target.closest('.product')
        const productId = product.id
        const productScore = product.querySelector('.score').innerText
        ajax(productId,productScore,"actions/AddCart.php")
    }
    //вывод продуктов
    if(event.target.closest('nav .navigation')){
        const productsPrint = document.querySelector(".productsPrint")
        productsPrint.addEventListener('click',function(e){
            e.preventDefault();
            console.log(e.target.closest('input').name)
            const input = e.target.closest('input').name
            ajax("Product",input,"actions/ProductViev.php")
        })
    }
})
const navElectro = {
    ELTN: 'Наушники',
    ELCH: 'Часы',
    ELT: 'Телефоны',
}
const navMoto = {
    MotD: 'Дорожные',
    MotS: 'Спортивные',
    MotCH: 'чёперы',
}
const navRopa = {
    OdegF: 'футболки',
    OdegS: 'штаны',
    OdegN: 'носки',
}
const dipEL = document.querySelector('.dipEL')
dipEL.addEventListener('click', function(){
    clearMain(navElectro)
})
const dipM = document.querySelector('.dipM')
dipM.addEventListener('click', function(){
    clearMain(navMoto)
})
const dipO = document.querySelector('.dipO')
dipO.addEventListener('click', function(){
    clearMain(navRopa)
})