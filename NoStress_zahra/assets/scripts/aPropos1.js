

const btnCommencer=document.getElementById('btn-commencer');
console.log(btnCommencer);

btnCommencer.addEventListener('click', () =>{
    window.location.href= 'aPropos2.html' ;
 })

 
function show() {
    document.querySelector('.burger').classList.toggle('open');
    document.querySelector('.navBar').classList.toggle('active');
    document.getElementById('menuBurger').src="../assets/img/Close-icone.png";
  }