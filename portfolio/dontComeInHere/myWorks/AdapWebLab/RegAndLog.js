const Phone = document.querySelector('.Phone')
const Email = document.querySelector('.Email')
const EmailOrPhone = document.querySelector('.EmailOrPhoneBlock')
Phone.addEventListener('click', function(){
    if(document.querySelector('.EmailOrPhone')){
        document.querySelector('.EmailOrPhone').remove()
    }
    const PhoneInput = `
    <div class="EmailOrPhone">
        <input type="text" name="phone" placeholder="Введите номер своего телефона">
    </div>`
    EmailOrPhone.insertAdjacentHTML('afterbegin', PhoneInput)
    console.log(EmailOrPhone.target)
})
Email.addEventListener('click', function(){
    if(document.querySelector('.EmailOrPhone')){
        document.querySelector('.EmailOrPhone').remove()
    }
    const EmailInput = `
    <div class="EmailOrPhone">
        <input type="Email" name="email" placeholder="Введите эл. почту">
    </div>`
    EmailOrPhone.insertAdjacentHTML('afterbegin', EmailInput)
    console.log(EmailOrPhone.target)
})