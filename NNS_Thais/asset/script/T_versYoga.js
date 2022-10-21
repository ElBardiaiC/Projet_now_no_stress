const versYoga = document.getElementById('yoga-btn');

versYoga.addEventListener('click' , () => {
console.log('yoga-btn');
window.location.href='T_yoga.php';
})

//& Concernant le menu Burger //
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