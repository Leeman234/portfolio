function clearMain(arr){
    const main = document.querySelector('.main')
    const keys = Object.keys(arr);
    const nav = `
    <nav class="navEL">
        <form class="productsPrint d-flex flex-column">
            <input type="submit" name="${keys[0]}" value="${arr[keys[0]]}">
            <input type="submit" name="${keys[1]}" value="${arr[keys[1]]}">
            <input type="submit" name="${keys[2]}" value="${arr[keys[2]]}">
        </form>  
    </nav>`
    if(main.querySelector('.product')){
        const productsDel = main.querySelectorAll('.product')
        productsDel.forEach(element => {
            element.remove()
        });
    }
    if(main.querySelector('.navEL')){
        const navEL = main.querySelectorAll('.navEL')
        navEL.forEach(element => {
            element.remove()
        });
        main.insertAdjacentHTML("beforeend", nav)
    }else{
        main.insertAdjacentHTML("beforeend", nav)
    }
}
function ajax(key,val,link) {
    var xml = new XMLHttpRequest();
    xml.open('POST', link);
    xml.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xml.onreadystatechange = function(){
        if(xml.readyState === 4 && xml.status === 200){
            const resp = xml.responseText
            if(link == 'actions/ProductViev.php'){
                const main = document.querySelector('main')
                if(main.querySelectorAll('.product')){
                    const product = main.querySelectorAll('.product')
                    product.forEach(element => {
                        element.remove()
                    });
                }
                main.insertAdjacentHTML('beforeend',resp)
            }
            if(link == 'actions/AddCart.php'){
                console.log(resp)
            }
            if(link == 'actions/CartAction.php'){
                console.log(resp)
            }
        }
    }
    xml.send(key+'='+ val);
}
function sum(){
    const cartProducts = document.querySelectorAll('.cartProduct')
    let AllStore = 0
    cartProducts.forEach(e => {
        const amount = Number(e.querySelector('#amount').innerText)
        const brush = Number(e.querySelector('#brush').innerText)
        AllStore += amount*brush
    });
    if(!AllStore == 0){
        document.querySelector('.amount a').innerText = AllStore
    }else{
        document.querySelector('.amount a').innerText = 'тут будет сумма'
    }
}
export {clearMain,ajax,sum};