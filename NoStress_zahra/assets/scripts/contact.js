
let formulaire=document.contactForm;
let nomPrenom=formulaire.nom;
let phone=formulaire.phone;
let email=formulaire.email;
let votreMsg=formulaire.votreMsg;

let nomError=document.getElementById("nom-error");
let popup=document.getElementById("valid-popup");

function envoi()
{
  if(nomPrenom.value ==""|| nomPrenom.value.trim()=="")
  {
      nomError.innerHTML="<p>Ce champs est obligatoire!</p>";
      nomError.classList.remove("success");
      nomError.classList.add("error");
  }
  

    if(nomPrenom.value !='' && phone.value !='' && email.value !='')
    {
        popup.classList.remove('hide');
        popup.classList.add('show');
    }
 }  
  
function closePopup()
{
    popup.classList.remove('show');
    popup.classList.add('hide');

}

function show() {
  
    document.querySelector('.navBar').classList.toggle('active');
  }
  
    let iconMenu = document.getElementById('menuBurger');
    let toggle=true;
  
    iconMenu.addEventListener('click',function(){
      toggle = !toggle;
      if(toggle){
        iconMenu.src='../assets/img/menu-burger.png';
      }else{
        iconMenu.src='../assets/img/close-icon.png';
      }
    })