const btnOui = document.getElementById('btn-non');
const btnNon = document.getElementById('btn-oui');


btnOui.addEventListener('click' , () => {



window.location.href='C_CombiendeTemps.html'


})

btnNon.addEventListener('click' , () => {



    window.location.href='C_CombiendeTemps.html';
    
    
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

