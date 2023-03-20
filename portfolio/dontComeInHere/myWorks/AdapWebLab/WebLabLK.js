window.addEventListener('click', function(e){
    if(e.target.closest('.ButNavLK')){
        const delClass = document.querySelector('.ButNavLK')
        if(delClass.classList.contains('firstNavLK')){
            delClass.classList.remove('firstNavLK')
        }
    }
})
const BtdSale = document.querySelector('.BtdSale')
BtdSale.addEventListener('click',function(e) {
    const SaleLink = document.querySelector('.SaleLinkText')
    navigator.clipboard.writeText(SaleLink.innerText)
    const blockHidden = document.querySelector('.copyPng')
    blockHidden.classList.add('b-show');
    setTimeout(() => {
        blockHidden.classList.remove('b-show');
    }, 2000);
})

