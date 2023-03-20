if(screen.width > screen.height){
    const kontactsContent= `
    <article>
        <br><br><br><br>
        <h2>Контакты<br><br></h2>
        <p><fons style="color:#0077B6 ;">Представительство в России</fons><br><br>
            117342, Москва, ул. Бутлерова, д. 17,<br>
            офис 4056<br><br>
            <a href="mailto:project-420@yandex.ru">project-420@yandex.ru</a><br>
            +7 (495)-1-420-420
        </p>
    </article>
    <div class="anchor d-flex">
        <a href="#discussion"><img src="application.png" alt=""></a>
        <a href="#information"><img src="requisites.png" alt=""></a>
    </div>`
    const kontact = document.querySelector('.kontacts')
    kontact.insertAdjacentHTML('afterbegin',kontactsContent)
}else{
    const kontactsContent= `
    <article>
        <br><br><br><br>
        <h2>Контакты<br><br></h2>
        <p><fons style="color:#0077B6 ;">Представительство в России</fons><br><br>
            117342, Москва, ул. Бутлерова, д. 17,<br>
            офис 4056<br><br>
            <a href="mailto:project-420@yandex.ru">project-420@yandex.ru</a><br>
            <a href="tel:+74951420420">+7 (495)-1-420-420</a>
        </p>
    </article>
    <div class="anchor d-flex">
        <a href="#discussion"><img src="application.png" alt=""></a>
        <a href="#information"><img src="requisites.png" alt=""></a>
    </div>`
    const kontact = document.querySelector('.kontacts')
    kontact.insertAdjacentHTML('afterbegin',kontactsContent)
}
window.addEventListener('click', function(e){
    const copy = e.target
    if(copy.classList.contains('copy')){
        navigator.clipboard.writeText(copy.innerHTML)
        const blockHidden = document.querySelector('.copyPng')
        blockHidden.classList.add('b-show');
        setTimeout(() => {
            blockHidden.classList.remove('b-show');
        }, 2000);
    }
})
var e = document.querySelector('#Bank');
e.addEventListener('click',function(el){
    var value = e.value;
    var text = e.options[e.selectedIndex].text;
    const requisitesBank = document.querySelector('.requisitesBank')
    if(text == 'выбери банк'){
        const del = requisitesBank.querySelectorAll('.copy')
        del.forEach(element => {
            element.remove() 
        });
    }
    if(text == 'Сбер банк'){
        const requisites = 
        `   <div class="copy">сбер</div>
            <div class="copy">сбер</div>
            <div class="copy">сбер</div>`
        const del = requisitesBank.querySelectorAll('.copy')
        del.forEach(element => {
            element.remove() 
        });
        requisitesBank.insertAdjacentHTML('afterbegin',requisites)
    }
    if(text == 'Альфа банк'){
        const requisites = 
        `   <div class="copy">Альфа</div>
            <div class="copy">Альфа</div>
            <div class="copy">Альфа</div>`
        const del = requisitesBank.querySelectorAll('.copy')
        del.forEach(element => {
            element.remove() 
        });
        requisitesBank.insertAdjacentHTML('afterbegin',requisites)
    }
    if(text == 'Тинькофф банк'){
        const requisites = 
        `   <div class="copy">Тинькофф</div>
            <div class="copy">Тинькофф</div>
            <div class="copy">Тинькофф</div>`
        const del = requisitesBank.querySelectorAll('.copy')
        del.forEach(element => {
            element.remove() 
        });
        requisitesBank.insertAdjacentHTML('afterbegin',requisites)
    }
    if(text == 'МТС банк'){
        const requisites = 
        `   <div class="copy">МТС</div>
            <div class="copy">МТС</div>
            <div class="copy">МТС</div>`
        const del = requisitesBank.querySelectorAll('.copy')
        del.forEach(element => {
            element.remove() 
        });
        requisitesBank.insertAdjacentHTML('afterbegin',requisites)
    }

})
