const btnPlus = document.getElementById('btn-plus-30');
const btnMoin = document.getElementById('btn-moin-30');


btnMoin.addEventListener('click' , () => {


   
window.location.href='';


})

btnPlus.addEventListener('click' , () => {


   
    window.location.href='C_respirationprofonde.html';
    
    
    })

    function show() {
  
        document.querySelector('.navBar').classList.toggle('active');
      }
      
        let iconMenu = document.getElementById('menuBurger');
        let toggle=true;
      
        iconMenu.addEventListener('click',function(){

          toggle = !toggle;

          if(toggle){
                iconMenu.src='../asset/img/Menu-burger new.png';
          }else{
                iconMenu.src='../asset/img/Close-icone.png';
          }
        })
