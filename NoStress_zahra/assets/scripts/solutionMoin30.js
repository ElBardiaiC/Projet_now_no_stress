
const btnSommeil1=document.getElementById('sommeil1');

btnSommeil1.addEventListener('click', () =>{
  window.location.href='meditationCourte.php';
})

const btnSommeil2=document.getElementById('sommeil2');

btnSommeil2.addEventListener('click', () =>{
  window.location.href='sEndormirEn15min.php';
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