

const btnCommencer=document.getElementById('btn-commencer');
console.log(btnCommencer);

btnCommencer.addEventListener('click', () =>{
    window.location.href= 'aPropos2.php' ;
 })

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
 

