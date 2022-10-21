const btnNon = document.getElementById('btn-non');
const btnOui = document.getElementById('btn-oui');


btnOui.addEventListener('click' , () => {



window.location.href='../../NNS_Thais/views/T_carteMeditation.php'


})

btnNon.addEventListener('click' , () => {



    window.location.href='C_CombiendeTemps.php';
    
    
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

