
const btnRelax=document.getElementById('rel');

btnRelax.addEventListener('click', () =>{
  window.location.href='relax.html';
})

const btnMarche=document.getElementById('marche');

btnMarche.addEventListener('click', () =>{
  window.location.href='marche.html';
})


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