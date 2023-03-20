const matriceON = `<button class="matriceON">включение матрицы</button>`
const matriceOFF = `<button class="matriceOFF">oтключение матрицы</button>`
window.addEventListener('click', function(event){
    if(event.target.closest('.matriceOFF')){
        document.querySelector('body').style.backgroundImage = 'none'
        document.querySelector('body').style.backgroundColor = '#009999'
        document.querySelector('body').style.color = 'write'
        document.querySelector('.matriceOFF').remove()
        document.querySelector('.nav').insertAdjacentHTML('beforeend', matriceON)
    }
    if(event.target.closest('.matriceON')){
        document.querySelector('body').style.backgroundColor = 'none'
        document.querySelector('body').style.backgroundImage = 'url(portfolio/img/NvL.gif)'
        document.querySelector('body').style.color = 'rgb(0, 255, 0)'
        document.querySelector('.matriceON').remove()
        document.querySelector('.nav').insertAdjacentHTML('beforeend', matriceOFF)
    }
})