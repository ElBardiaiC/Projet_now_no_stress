'use strict'

const btnSommeil=document.getElementById('rep1');

btnSommeil.addEventListener('click', () =>{
  location.href='http://127.0.0.1:5501/NOWS_Chaimae/views/C_ProblemeSommeil.html';
})

const btnAnxiete=document.getElementById('rep2');

btnAnxiete.addEventListener('click', () =>{
  location.href='solutionAnxiete.html';
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