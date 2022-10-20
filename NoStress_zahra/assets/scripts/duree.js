

'use strict'

const btnMoins30=document.getElementById('moins30');

btnMoins30.addEventListener('click', () =>{
  location.href='relaxationCourte.php';
})

const btnPlus30=document.getElementById('plus30');

btnPlus30.addEventListener('click', () =>{
  location.href='relaxationLongue.php';
});

 
function show() {
  
    document.querySelector('.navBar-solutions').classList.toggle('active');
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