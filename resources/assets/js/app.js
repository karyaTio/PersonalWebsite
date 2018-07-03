function toggleNavbar(){
  var x = document.getElementById("myNavbar");
  if(x.className == ""){
    x.className += " responsive";
    console.log("Hallo");
  }else {
    x.className = "";
  }
}
