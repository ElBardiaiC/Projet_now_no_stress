const versBienvenue = document.getElementById('log-in');

versBienvenue.addEventListener('click' , () =>{

window.location.href='./views/T_welcome.php';
})

const essai = document.getElementById('essai');

essai.addEventListener('click' , () => {

window.location.href='../NoStress_zahra/views/aPropos2.php';

})

// const welcome = document.getElementById('welcome');

// welcome.addEventListener('click' , () =>{

// window.location.href='T_welcome.html';

// })

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