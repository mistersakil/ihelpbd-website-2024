const appnavbar = document.querySelector('#navbar');
const applogo = document.querySelector('#logo');
const favImage = document.querySelector('#favImage');
const logoImage = document.querySelector('#logoImage');


window.addEventListener('scroll',()=>{
    if(scrollY > 5){
        applogo.classList.add('logo_scroll');
        favImage.classList.add('shown');
        logoImage.classList.add('hidden');
    }else{
        applogo.classList.remove('logo_scroll');
        favImage.classList.remove('shown');
        logoImage.classList.remove('hidden');
    }

    if(scrollY > 200){
        applogo.classList.add('shown');
    }else{
        applogo.classList.remove('shown');
    }
    if(scrollY > 10){
        appnavbar.classList.add('navbar_scroll');
        

    }else{
        appnavbar.classList.remove('navbar_scroll');
        applogo.classList.remove('logo_scroll');
        favImage.classList.remove('shown');
        logoImage.classList.remove('hidden');
    }
});
