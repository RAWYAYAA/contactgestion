console.log("EEE")
let modal = document.getElementById('modaladd');
var closed = document.getElementById("close");
modal.addEventListener("click" , function(){
document.querySelector('#model').classList.toggle('hidden')
})
closed.onclick = function() {
document.querySelector('.model').classList.add("hidden")
  }



