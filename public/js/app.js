const appnavbar = document.querySelector('#navbar');
const applogo = document.querySelector('#logo');


window.addEventListener('scroll',()=>{
    if(scrollY > 10){
        appnavbar.classList.add('navbar_scroll');
        applogo.classList.add('logo_scroll');
    }else{
        appnavbar.classList.remove('navbar_scroll');
        applogo.classList.remove('logo_scroll');
    }
});