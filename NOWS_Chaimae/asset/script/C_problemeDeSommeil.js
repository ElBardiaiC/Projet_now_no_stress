const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');


console.log(btn1 , btn2 ,btn3);

btn1.addEventListener('click' , () => {



window.location.href='C_angoisserdesecoucher.php';


})

btn2.addEventListener('click' , () => {



    window.location.href='C_angoisserdesecoucher.php';
    
    
    })


    btn3.addEventListener('click' , () => {



        window.location.href='C_angoisserdesecoucher.php';
        
        
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