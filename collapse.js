document.getElementById('popupbutton').addEventListener("click", function() {
  var contact=document.getElementById("popup");
    contact.style.display = "grid";
    document.getElementById('close').addEventListener("click", function() {
      var contact=document.getElementById("popup");
        contact.style.display = "none";
  
    });

});

document.getElementById('popupbutton1').addEventListener("click", function() {
  var contact=document.getElementById("popup1");
    contact.style.display = "block";
    document.getElementById('close1').addEventListener("click", function() {
      var contact=document.getElementById("popup1");
        contact.style.display = "none";
  
    });

});




