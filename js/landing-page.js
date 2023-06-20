var navBar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  if (window.scrollY > 70) {
    navBar.classList.add("navbar-scrolled");
    navBar.classList.remove("navbar-light");
    navBar.classList.add("navbar-dark");
  } else {
    navBar.classList.remove("navbar-scrolled");
    navBar.classList.remove("navbar-dark");
    navBar.classList.add("navbar-light");
  }
});

var navMenu = document.querySelector(".navMenu");
function addBg() {
  if (window.innerWidth < 992) {
    navMenu.classList.add("menu");
  }
}

function removeBg() {
  if (window.innerWidth >= 992) {
    navMenu.classList.remove("menu");
  }
}

window.addEventListener("resize", function () {
  addBg();
  removeBg();
});

// Initial check when the page loads
addBg();
removeBg();

const btn = document.getElementById("buttonSend");
const myText = document.getElementById("newText");

btn.addEventListener("click", function () {
  const myInsertText = "Thank You for your response!! If you need some info please contact me on example@example.com";
  myText.innerHTML = myInsertText;
});
