import { ajax } from '../functions/function.js';
import { sum } from '../functions/function.js';
window.addEventListener('click', function(event){
    //скрытие формы оформления заказа
    if(event.target.dataset.action === "deleteSale"){
        purchase.style.position = 'relative'
        purchase.style.zIndex = '0'
        purchase.style.opacity = '0'
        purchase.querySelector('.delSale').style.cursor ='default'
    }
    if(event.target.closest('.cartProduct')){
        // удаление товара
        const productDel = event.target.closest('.cartProduct')
        const productDelId = productDel.dataset.id
        if(event.target.dataset.action === "delete"){
            productDel.remove()
            ajax('del',productDelId,'actions/CartAction.php')
        }
        // Сщётчик товара
        const brush = event.target.closest('.cartProduct').querySelector('#brush').innerText
        const availability = event.target.closest('.cartProduct').querySelector('.availabilityCart').innerText
        // +
        if(event.target.dataset.action === "plus"){
            if(Number(brush) < Number(availability)){
                event.target.closest('.cartProduct').querySelector('#brush').innerText++
                const SQL = event.target.closest('.cartProduct').querySelector('#brush').innerText
                ajax('plusAndMinusAndBrush',productDelId+','+ SQL,'actions/CartAction.php')
            }
        }
        // -
        if(event.target.dataset.action === "minus"){
            if(Number(brush) > 1){
                event.target.closest('.cartProduct').querySelector('#brush').innerText--
                const SQL = event.target.closest('.cartProduct').querySelector('#brush').innerText
                ajax('plusAndMinusAndBrush',productDelId+','+ SQL,'actions/CartAction.php')
            }
        }
        // 0
        if(event.target.dataset.action === "brush"){
            event.target.closest('.cartProduct').querySelector('#brush').innerText = 1
            const SQL = event.target.closest('.cartProduct').querySelector('#brush').innerText
            ajax('plusAndMinusAndBrush',productDelId+','+ SQL,'actions/CartAction.php')
        }
    }
    sum()
});
sum()
const summ = document.querySelector('.amount a')
const purchase = document.querySelector('.purchase')
summ.addEventListener('click', function(event){
    purchase.style.position = 'absolute'
    purchase.style.zIndex = '5'
    purchase.style.opacity = '1'
    purchase.querySelector('.delSale').style.cursor ='pointer'
});