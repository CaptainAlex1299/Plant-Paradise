function toggle() {
  var div = document.getElementById("navbar-list");
  div.classList.toggle("toggled");
}

document.getElementById("navbarbtn").onclick = function () {
  toggle();
};

function toggleplantcarelist() {
  let div4 = document.getElementById("arrow");
  let div3 = document.getElementById("dropdownplantcare");
  div4.classList.toggle("right-toggled");
  div3.classList.toggle("dropdownplantcare-toggled");
  event.stopPropagation();
}

document.addEventListener("click", function(event) {
let div3 = document.getElementById("dropdownplantcare");
let div4 = document.getElementById("arrow");

if (!div4.contains(event.target) && div4.classList.contains("right-toggled")) {
  div4.classList.remove("right-toggled");
  div3.classList.remove("dropdownplantcare-toggled");
}
});

function toggleshoplist() {
  let div4 = document.getElementById("shoparrow");
  let div3 = document.getElementById("dropdownshop");
  div4.classList.toggle("right-toggled");
  div3.classList.toggle("dropdownshop-toggled");
  event.stopPropagation();
}

document.addEventListener("click", function(event) {
let div3 = document.getElementById("dropdownshop");
let div4 = document.getElementById("shoparrow");

if (!div4.contains(event.target) && div4.classList.contains("right-toggled")) {
  div4.classList.remove("right-toggled");
  div3.classList.remove("dropdownshop-toggled");
}
});

function toggleaboutlist() {
  let div4 = document.getElementById("aboutarrow");
  let div3 = document.getElementById("dropdownabout");
  div4.classList.toggle("right-toggled");
  div3.classList.toggle("dropdownabout-toggled");
  event.stopPropagation();
}

document.addEventListener("click", function(event) {
let div3 = document.getElementById("dropdownabout");
let div4 = document.getElementById("aboutarrow");

if (!div4.contains(event.target) && div4.classList.contains("right-toggled")) {
  div4.classList.remove("right-toggled");
  div3.classList.remove("dropdownabout-toggled");
}
});

function togglelibrary() {
  let div3 = document.getElementById("library");
  div3.classList.toggle("dropdown-library-toggled");
  event.stopPropagation();
}

document.addEventListener("click", function(event) {
let div3 = document.getElementById("library");

if (!div3.contains(event.target)) {
  div3.classList.remove("dropdown-library-toggled");
}
});