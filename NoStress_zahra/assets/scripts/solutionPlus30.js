

const btnBruit=document.getElementById('sommeil3');

btnBruit.addEventListener('click', () =>{
  window.location.href='bruitNature.php';
})

const btnYogaSerenite=document.getElementById('sommeil4');

btnYogaSerenite.addEventListener('click', () =>{
  window.location.href='yogaSerenite.php';
})

const btnMedit=document.getElementById('sommeil5');

btnMedit.addEventListener('click', () =>{
  window.location.href='MeditationLongue.php';
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