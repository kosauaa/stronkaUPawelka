const menu = document.querySelector('.hamburger'); 
const lista = document.querySelector('nav'); 
const pole = document.querySelector('ul'); 


window.onload = function(){
    lista.classList.toggle('active'); 
	pole.classList.toggle('active'); 
}

menu.addEventListener('click', () => { 
    lista.classList.toggle('active'); 
	pole.classList.toggle('active'); 

});