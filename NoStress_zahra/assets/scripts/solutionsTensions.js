

const btnRessource1=document.getElementById('ressource1');

btnRessource1.addEventListener('click', () =>{
  window.location.href='ressourceAntiPression.php';
})

const btnRessource2=document.getElementById('ressource2');

btnRessource2.addEventListener('click', () =>{
  window.location.href='yoga_video.php';
})


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