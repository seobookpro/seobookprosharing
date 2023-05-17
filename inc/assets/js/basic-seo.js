// Get the elements with class="column"
var elements = document.getElementsByClassName("columnfiler");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "32%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "24%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var columnfiler = document.getElementById("btnContainer");
var btnfiler = columnfiler.getElementsByClassName("btnfiler");
for (var i = 0; i < btnfiler.length; i++) {
  btnfiler[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}