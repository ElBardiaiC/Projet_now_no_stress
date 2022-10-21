

const btnMarche=document.getElementById('marche');

btnMarche.addEventListener('click', () =>{
  window.location.href='../../NNS_Thais/views/T_carteYoga.php';
})

const btnHuile=document.getElementById('huile');

btnHuile.addEventListener('click', () =>{
  window.location.href='../../NNS_Thais/views/T_carteHistoireDuSoir.php';
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