'use strict'

 const btnQuestionnaire=document.getElementById('questionnaire');
 console.log(btnQuestionnaire);

 btnQuestionnaire.addEventListener('click', () => {
  window.location.href= 'ceQuiVousAmene.html' ;
 })

 
function show() {
    document.querySelector('.burger').classList.toggle('open');
    document.querySelector('.navBar').classList.toggle('active');
    document.getElementById('menuBurger').src="../assets/img/Close-icone.png";
  }