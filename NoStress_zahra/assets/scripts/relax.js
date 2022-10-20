
'use strict'

const btnRelax=document.getElementById('se-relaxer');

btnRelax.addEventListener('click', () =>{
  location.href='../views/duree.php';
})

const btnAnxiete=document.getElementById('rep2');

btnAnxiete.addEventListener('click', () =>{
  location.href='solutionAnxiete.php';
}); 



function show() {
  
  document.querySelector('.navBar').classList.toggle('active');
}

  let iconMenu = document.getElementById('menuBurger');
  let toggle=true;

  iconMenu.addEventListener('click',function(){
    toggle = !toggle;
    if(toggle){
      iconMenu.src='../assets/img/menu-burger.png';
    }else{
      iconMenu.src='../assets/img/close-icon.png';
    }
  })