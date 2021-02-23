/* navbar function */

function myFunction() {
  var x = document.getElementById("topnav");
  if (x.className === "topnav sticky") {
    x.className += " responsive";
  } else {
    x.className = "topnav sticky";
  }
}