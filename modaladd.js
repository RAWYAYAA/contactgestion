let modal = document.getElementById('modaladd');
var span = document.getElementsByClassName("close")[0];
modal.addEventListener("click" , function(){
document.querySelector('.model').classList.toggle('hidden')
})
span.onclick = function() {
document.querySelector('.model').classList.add("hidden")
  }

// let model = document.getElementById('edit');
// var span = document.getElementsByClassName("close")[0];
// modal.addEventListener("click" , function(){
// document.querySelector('.modell').classList.toggle('hiddenn')
// })
// span.onclick = function() {
// document.querySelector('.modell').classList.add("hiddenn")
//   }

