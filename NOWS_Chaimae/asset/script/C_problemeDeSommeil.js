const btn1 = document.getElementById('rep-1');
const btn2 = document.getElementById('rep-2');
const btn3 = document.getElementById('rep-3');


btn1.addEventListener('click' , () => {



window.location.href='C_angoisserdesecoucher.html';


})

btn2.addEventListener('click' , () => {



    window.location.href='C_angoisserdesecoucher.html';
    
    
    })


    btn3.addEventListener('click' , () => {



        window.location.href='C_angoisserdesecoucher.html';
        
        
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