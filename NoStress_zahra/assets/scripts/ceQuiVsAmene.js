'use strict'

const btnSommeil=document.getElementById('rep1');

btnSommeil.addEventListener('click', () =>{
  location.href='http://localhost/Projet_now_no_stress/NOWS_Chaimae/views/C_ProblemeSommeil.php';
})

const btnAnxiete=document.getElementById('rep2');

btnAnxiete.addEventListener('click', () =>{
  location.href='solutionAnxiete.php';
});
const btnTension=document.getElementById('rep3');

btnTension.addEventListener('click', () =>{
  location.href='tensions.php';
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