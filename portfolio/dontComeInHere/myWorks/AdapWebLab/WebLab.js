const Cookie = document.querySelector('.Cookie')
Cookie.classList.add('C-show');
setTimeout(() => {
    Cookie.classList.remove('C-show');
}, 5000);
window.addEventListener('mousemove', function(e){
    if(e.target.closest('.devContent')){
        const devContent = e.target.closest('.devContent')
        const corY = (devContent.getBoundingClientRect().top);
        const corX = (devContent.getBoundingClientRect().left);
        const img = devContent.querySelector(".devImg");
        devContent.addEventListener("mousemove", function (e) {
            move (e.clientX-corX, e.clientY-corY);
        });
        function move (x, y) {
            let wh = devContent.offsetHeight / 2,
            ww = devContent.offsetWidth / 2;
            
            img.style.setProperty('--mouseX', (x - ww) / 10 + "deg");
            img.style.setProperty('--mouseY', (y - wh) / 10 + "deg");
        }
    }
})
const product = document.querySelectorAll('.productButton')
window.addEventListener('click', function(e){
    if(e.target.closest('.productButton')){
        const delClass = document.querySelector('.productButton')
        if(delClass.classList.contains('backPrimaryBtn')){
            delClass.classList.remove('backPrimaryBtn')
        }
    }
const mos = document.querySelector('.Moscow')
mos.addEventListener('click', function(e){
    var options = {
        year: 'numeric',
        month: 'numeric',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        timezone: 'UTC'
    };
    alert('сейчас в Москве '+new Date().toLocaleString("ru", options));
})
const cze = document.querySelector('.Czech')
cze.addEventListener('click', function(e){
    var options = {
        year: 'numeric',
        month: 'numeric',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        timezone: 'UTC'
    };
    alert('сейчас в Чехии '+new Date(Date.now() - 60000 * 60).toLocaleString("ru", options))
})
const reg = document.querySelector('.Registration')
reg.addEventListener('click', function(e){
    const regLog = ``
    const regAndLog = document.querySelector('.regAndLog')
    regAndLog.insertAdjacentHTML('afterbegin', regLog)
})
const log = document.querySelector('.Input')
log.addEventListener('click', function(e){
    const regLog = ``
    const regAndLog = document.querySelector('.regAndLog')
    regAndLog.insertAdjacentHTML('afterbegin', regLog)
})
window.addEventListener('click', function(e){
    if(e.target.closest('.dd')){
        document.querySelector('.regLog').remove()
    }
})
    if(e.target == product[0]){
        const squaresContent = `<div class="d-flex squaresContent justify-content-between">
        <section class="square">
            <div class="development"><p>Разработка</p></div>
            <article class="d-flex devContent justify-content-between">
                <div class="textDev">
                    <h2>Дизайн</h2>
                    <p>Уникальный стиль в 
                    сочетании с функциональностью.</p>
                </div>
                <img class="devImg"src="dev1.png" alt="">
            </article>
        </section>
        <section class="square">
            <div class="development"><p>Разработка</p></div>
            <article class="d-flex devContent justify-content-between">
                <div class="textDev">
                    <h2>веб-разработка</h2>
                    <p>Приложения под iOS и Android.</p>
                </div>
                <img class="devImg"src="dev2.png" alt="">
            </article>
        </section>
        <section class="square">
            <div class="development"><p>Разработка</p></div>
            <article class="d-flex devContent justify-content-between">
                <div class="textDev">
                    <h2>Мобильная разработка</h2>
                    <p>Приложения под iOS и Android.</p>
                </div>
                <img class="devImg"src="dev3.png" alt="">
            </article>
        </section>
    </div>`
    const squares = document.querySelector('.squares')
    if(squares.querySelector('.squaresContent')){
        squares.querySelector('.squaresContent').remove()
        squares.insertAdjacentHTML('afterbegin', squaresContent)
    }
    }
    if(e.target == product[1]){
            const squaresContent = `<div class="d-flex squaresContent justify-content-between">
            <section class="square">
                <div class="staff"><p>Персонал</p></div>
                <article class="d-flex devContent justify-content-between">
                    <div class="textDev">
                        <h2>Кадры</h2>
                        <p>Подбор специалистов<br>под ваши задачи</p>
                    </div>
                    <img class="devImg"src="HR1.png" alt="">
                </article>
            </section>
            <section class="square">
            </section>
            <section class="square">
            </section>
        </div>`
        const squares = document.querySelector('.squares')
        if(squares.querySelector('.squaresContent')){
            squares.querySelector('.squaresContent').remove()
            squares.insertAdjacentHTML('afterbegin', squaresContent)
        }
    }
    if(products[2]){
        const squaresContent = `<div class="d-flex squaresContent justify-content-between">
        <section class="square">
        </section>
        <section class="square">
        </section>
        <section class="square">
        </section>
    </div>`
    const squares = document.querySelector('.squares')
    if(squares.querySelector('.squaresContent')){
        squares.querySelector('.squaresContent').remove()
        squares.insertAdjacentHTML('afterbegin', squaresContent)
    }
    }
    if(products[3]){
        const squaresContent = `<div class="d-flex squaresContent justify-content-between">
        <section class="square">
        </section>
        <section class="square">
        </section>
        <section class="square">
        </section>
    </div>`
    const squares = document.querySelector('.squares')
    if(squares.querySelector('.squaresContent')){
        squares.querySelector('.squaresContent').remove()
        squares.insertAdjacentHTML('afterbegin', squaresContent)
    }
    }
    if(products[4]){
        const squaresContent = `<div class="d-flex squaresContent justify-content-between">
        <section class="square">
        </section>
        <section class="square">
        </section>
        <section class="square">
        </section>
    </div>`
    const squares = document.querySelector('.squares')
    if(squares.querySelector('.squaresContent')){
        squares.querySelector('.squaresContent').remove()
        squares.insertAdjacentHTML('afterbegin', squaresContent)
    }
    }
})