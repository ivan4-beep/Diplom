let popup = document.getElementById('popup');
let basket = document.getElementById("shopping-popup");
let close = document.getElementById("popup__close");
let bodypopup = document.getElementById("popup__body");

basket.onclick = function() { 
   popup.style.display = "block";
}
close.onclick = function(){
   popup.style.display = "none";
}
window.onclick = function(e){
   if(e.target == popup){
      popup.style.display = "none";
      popup.style.display = "none";
}
}