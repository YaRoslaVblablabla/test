let modal = document.querySelector('.modal')
let postmodal = document.querySelector('#postmodal')

let closeBtn1 = document.querySelector('.close')
let closeBtn2 = document.querySelector('.close2')

let overlay = document.querySelector('.overlay')
let htmlBody = document.querySelector('body')

let btn1 = document.querySelector('.first')
let btn2 = document.querySelector('.second')

btn1.addEventListener('click', openModal)
btn2.addEventListener('click', openModal)

closeBtn1.addEventListener('click', close)
closeBtn2.addEventListener('click', close)
overlay.addEventListener('click', close)


/* form */

let inpName = document.querySelector('#name')
let inpNumber = document.querySelector('#number')
let myForm = document.querySelector('#myForm')

myForm.addEventListener('submit', async (e) => {
    e.preventDefault()


    if(inpName.value.trim()  != '' && inpNumber.value.trim()  != ''){
        localStorage.setItem('name', inpName.value)
        localStorage.setItem('number', inpNumber.value)
        

        let resp = await fetch('http://127.0.0.1:8000/api/q', {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                name: localStorage.getItem('name'),
                number: localStorage.getItem('number')
            })
        })

        let data = await resp.json()
        console.log(data)
        modal.classList.remove('modal__open')
        postmodal.classList.add('modal__open')
    } else {
        alert('Заполните форму')
    }

})

function getData(){
    fetch('http://127.0.0.1:8000/api/url1')
    .then(response => response.json())
    .then(data1 => {
        document.querySelector('.quantity').innerHTML = `${data1}+`
    })

    fetch(`https://www.cbr-xml-daily.ru/daily_json.js`)
    .then(response => response.json())
    .then(data2 => {
        document.querySelector('.percent').innerHTML = `${Math.round(data2.Valute.GBP.Value)}`
    })
}

function openModal(){
    modal.classList.add('modal__open')
    htmlBody.classList.add('hidden')
    overlay.classList.add('active')
}

function close(){
    overlay.classList.remove('active')
    htmlBody.classList.remove('hidden')
    postmodal.classList.remove('modal__open')
    modal.classList.remove('modal__open')
}

getData()