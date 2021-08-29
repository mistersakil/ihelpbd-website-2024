/* variable declaration  */

let body = document.body || document.documentElement;
let navbar = document.querySelector(".navbar");
let bars = document.querySelector(".bars .icon");
let navbarCloseBtn = document.querySelector(".navbar .close");
let themeChangeBtn = document.querySelector(".themeChangeBtn");
let featuredFigure = document.querySelector(".featured .figure");
let featuredContent = document.querySelector(".featured .main");
let productFigure = document.querySelector(".product .figure");
let productContent = document.querySelector(".product .main");
let clients = document.querySelectorAll(".clients .main .content .box");
let filterBtn = document.querySelectorAll(".clients .main .filter .filterBtn");

/* variables declaration end */

/* clients */

for (let i = 0; i < filterBtn.length; i++) {
  filterBtn[i].onclick = function (event) {
    event.preventDefault();
    let filteredClass = this.classList[1];
    for (let j = 0; j < clients.length; j++) {
      if (
        clients[j].classList.contains(filteredClass) ||
        filteredClass == "all"
      ) {
        clients[j].classList.remove("hidden");
      } else {
        clients[j].classList.add("hidden");
      }
    }
  };
}

/* clients end*/

/* navbar  */
bars.onclick = function (event) {
  navbar.classList.toggle("active");
};
navbarCloseBtn.onclick = function (event) {
  navbar.classList.remove("active");
};
/* navbar end */

/* change theme */
themeChangeBtn.onclick = function (event) {
  event.preventDefault();
  body.classList.toggle("dark");
  this.firstElementChild.classList.toggle("fa-sun");
};
/* change theme end */

/* window scroll event */

window.onscroll = function (event) {
  const scrollTopPos = window.pageYOffset || document.documentElement.scrollTop;
  const featuredTopPos = featuredFigure.getBoundingClientRect().top;
  const productTopPos = productFigure.getBoundingClientRect().top;
  const featuredOptions = {
    scrollTop: scrollTopPos,
    elementTop: featuredTopPos,
    figure: featuredFigure,
    content: featuredContent,
  };
  const productOptions = {
    scrollTop: scrollTopPos,
    elementTop: productTopPos,
    figure: productFigure,
    content: productContent,
  };
  function animateOnScroll({ scrollTop, elementTop, figure, content }) {
    if (Math.ceil(elementTop) <= 750) {
      figure.classList.add("active");
      content.classList.add("active");
    } else {
      figure.classList.remove("active");
      content.classList.remove("active");
    }
  }
  animateOnScroll(featuredOptions);
  animateOnScroll(productOptions);
};
/* window scroll event end */
