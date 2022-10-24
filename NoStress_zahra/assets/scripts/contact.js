
let formulaire=document.contactForm;
let nomPrenom=formulaire.nom;
let phone=formulaire.phone;
let email=formulaire.email;
let msg=formulaire.votreMsg;

let nomError=document.getElementById("nom-error");
let phoneError=document.getElementById("phone-error");
let emailError=document.getElementById("email-error");
let msgError=document.getElementById("votreMsg-error")
let popup=document.getElementById("valid-popup");

function envoi()
{
  if(nomPrenom.value ==""|| nomPrenom.value.trim()=="")
  {
      nomError.innerHTML="<p>Ce champs est obligatoire!</p>";
      nomError.classList.remove("success");
      nomError.classList.add("error");
  }
  
   if(phone.value ==""|| phone.value.trim()=="")
  {
      phoneError.innerHTML="<p>Ce champs est obligatoire!</p>";
      phoneError.classList.remove("success");
      phoneError.classList.add("error");
  }

  if(email.value ==""|| email.value.trim()=="")
  {
      emailError.innerHTML="<p>Ce champs est obligatoire!</p>";
      emailError.classList.remove("success");
      emailError.classList.add("error");
  }

  if(msg.value ==""|| msg.value.trim()=="")
  {
      msgError.innerHTML="<p>Ce champs est obligatoire!</p>";
      msgError.classList.remove("success");
      msgError.classList.add("error");
  }
    if(nomPrenom.value !='' && email.value !='' && phone.value !='' && msg.value !='')
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