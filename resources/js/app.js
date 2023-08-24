import './bootstrap';
import '../css/app.css'; 


const btn = document.querySelector('button.burger-btn')
const menu = document.querySelector('.menu')

btn.addEventListener('click', ()=>{
    menu.classList.toggle('hidden')
})