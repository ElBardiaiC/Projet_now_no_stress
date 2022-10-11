const btnOui = document.getElementById('btn-non');
const btnNon = document.getElementById('btn-oui');


btnOui.addEventListener('click' , () => {



window.location.href='C_CombiendeTemps.html';


})

btnNon.addEventListener('click' , () => {



    window.location.href='C_CombiendeTemps.html';
    
    
    })

<<<<<<< HEAD
=======
    const sidenav = document.getElementById("mySidenav");
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");
    
   
    
    openBtn.addEventListener('click' , (event) => {

 openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;
      
    /* Set the width of the side navigation to 250px */
    function openNav(event) {
      
      if(event){
        sidenav.classList.add("active");
      }
  
    
      

      
    }

    
         function closeNav() {
      sidenav.classList.remove("active");}
    /* Set the width of the side navigation to 0 */
   
    }
)
>>>>>>> ed280e89dcfabc3637e93b9e9fa82491894473d4
