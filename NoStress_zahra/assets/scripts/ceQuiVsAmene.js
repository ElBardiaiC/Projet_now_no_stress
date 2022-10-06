'use strict'

const btnSommeil=document.getElementById('rep1');

btnSommeil.addEventListener('click', () =>{
  location.href='http://127.0.0.1:5500/NOWS_Chaimae/views/C_ProblemeSommeil.html';
})

const btnAnxiete=document.getElementById('rep2');

btnAnxiete.addEventListener('click', () =>{
  location.href='solutionAnxiete.html';
});


// function show() {
//   document.querySelector('.burger').classList.toggle('open');
//   document.querySelector('.navBar').classList.toggle('active');
//   document.getElementById('menuBurger').src="../assets/img/Close-icone.png";
// }

function show() {
  document.querySelector('.burger').classList.toggle('open');
  document.querySelector('.navBar').classList.toggle('active');

  let iconMenu = document.getElementById('menuBurger');
  if (iconMenu.src="../assets/img/Close-icone.png"){
    iconMenu.src.replace("../assets/img/Close-icone.png","../assets/img/menu-burger.png")
  }
  else{
    iconMenu.src.replace("../assets/img/menu-burger.png","../assets/img/Close-icone.png")
  }

}
