function toggleNavbar() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar-nav") {
        x.className += " toggleNavbar";
        console.log("Added Classlist");
    } else {
        x.className = "navbar-nav";
        console.log("Remove Classlist");
    }
}
