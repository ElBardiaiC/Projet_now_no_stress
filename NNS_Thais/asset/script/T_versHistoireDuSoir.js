const versHistoire = document.getElementById('histoire-btn');

versHistoire.addEventListener('click' , () => {

window.location.href='../views/T_histoireDuSoir.php';
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