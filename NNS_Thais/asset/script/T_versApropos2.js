const aPropos2 = document.getElementById('apropos-questionnaire');

aPropos2.addEventListener('click' , () =>{

    window.location.href='../../NoStress_zahra/views/aPropos2.php'
})


//& COncernant le menu Burger //
function show() {
  
    document.querySelector('.navBar').classList.toggle('active');
  }
  
    let iconMenu = document.getElementById('menuBurger');
    let toggle=true;
  
    iconMenu.addEventListener('click',function(){
      toggle = !toggle;
      if(toggle){
        iconMenu.src='../asset/img/menu-burger.png';
      }else{
        iconMenu.src='../asset/img/close-icon.png';
      }
    })
