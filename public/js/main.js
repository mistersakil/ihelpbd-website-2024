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

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6Im1haW4uanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKiB2YXJpYWJsZSBkZWNsYXJhdGlvbiAgKi9cblxubGV0IGJvZHkgPSBkb2N1bWVudC5ib2R5IHx8IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudDtcbmxldCBuYXZiYXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm5hdmJhclwiKTtcbmxldCBiYXJzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5iYXJzIC5pY29uXCIpO1xubGV0IG5hdmJhckNsb3NlQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5uYXZiYXIgLmNsb3NlXCIpO1xubGV0IHRoZW1lQ2hhbmdlQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi50aGVtZUNoYW5nZUJ0blwiKTtcbmxldCBmZWF0dXJlZEZpZ3VyZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuZmVhdHVyZWQgLmZpZ3VyZVwiKTtcbmxldCBmZWF0dXJlZENvbnRlbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmZlYXR1cmVkIC5tYWluXCIpO1xubGV0IHByb2R1Y3RGaWd1cmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnByb2R1Y3QgLmZpZ3VyZVwiKTtcbmxldCBwcm9kdWN0Q29udGVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIucHJvZHVjdCAubWFpblwiKTtcbmxldCBjbGllbnRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5jbGllbnRzIC5tYWluIC5jb250ZW50IC5ib3hcIik7XG5sZXQgZmlsdGVyQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5jbGllbnRzIC5tYWluIC5maWx0ZXIgLmZpbHRlckJ0blwiKTtcblxuLyogdmFyaWFibGVzIGRlY2xhcmF0aW9uIGVuZCAqL1xuXG4vKiBjbGllbnRzICovXG5cbmZvciAobGV0IGkgPSAwOyBpIDwgZmlsdGVyQnRuLmxlbmd0aDsgaSsrKSB7XG4gIGZpbHRlckJ0bltpXS5vbmNsaWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICBsZXQgZmlsdGVyZWRDbGFzcyA9IHRoaXMuY2xhc3NMaXN0WzFdO1xuICAgIGZvciAobGV0IGogPSAwOyBqIDwgY2xpZW50cy5sZW5ndGg7IGorKykge1xuICAgICAgaWYgKFxuICAgICAgICBjbGllbnRzW2pdLmNsYXNzTGlzdC5jb250YWlucyhmaWx0ZXJlZENsYXNzKSB8fFxuICAgICAgICBmaWx0ZXJlZENsYXNzID09IFwiYWxsXCJcbiAgICAgICkge1xuICAgICAgICBjbGllbnRzW2pdLmNsYXNzTGlzdC5yZW1vdmUoXCJoaWRkZW5cIik7XG4gICAgICB9IGVsc2Uge1xuICAgICAgICBjbGllbnRzW2pdLmNsYXNzTGlzdC5hZGQoXCJoaWRkZW5cIik7XG4gICAgICB9XG4gICAgfVxuICB9O1xufVxuXG4vKiBjbGllbnRzIGVuZCovXG5cbi8qIG5hdmJhciAgKi9cbmJhcnMub25jbGljayA9IGZ1bmN0aW9uIChldmVudCkge1xuICBuYXZiYXIuY2xhc3NMaXN0LnRvZ2dsZShcImFjdGl2ZVwiKTtcbn07XG5uYXZiYXJDbG9zZUJ0bi5vbmNsaWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gIG5hdmJhci5jbGFzc0xpc3QucmVtb3ZlKFwiYWN0aXZlXCIpO1xufTtcbi8qIG5hdmJhciBlbmQgKi9cblxuLyogY2hhbmdlIHRoZW1lICovXG50aGVtZUNoYW5nZUJ0bi5vbmNsaWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gIGJvZHkuY2xhc3NMaXN0LnRvZ2dsZShcImRhcmtcIik7XG4gIHRoaXMuZmlyc3RFbGVtZW50Q2hpbGQuY2xhc3NMaXN0LnRvZ2dsZShcImZhLXN1blwiKTtcbn07XG4vKiBjaGFuZ2UgdGhlbWUgZW5kICovXG5cbi8qIHdpbmRvdyBzY3JvbGwgZXZlbnQgKi9cblxud2luZG93Lm9uc2Nyb2xsID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gIGNvbnN0IHNjcm9sbFRvcFBvcyA9IHdpbmRvdy5wYWdlWU9mZnNldCB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuc2Nyb2xsVG9wO1xuICBjb25zdCBmZWF0dXJlZFRvcFBvcyA9IGZlYXR1cmVkRmlndXJlLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcDtcbiAgY29uc3QgcHJvZHVjdFRvcFBvcyA9IHByb2R1Y3RGaWd1cmUuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wO1xuICBjb25zdCBmZWF0dXJlZE9wdGlvbnMgPSB7XG4gICAgc2Nyb2xsVG9wOiBzY3JvbGxUb3BQb3MsXG4gICAgZWxlbWVudFRvcDogZmVhdHVyZWRUb3BQb3MsXG4gICAgZmlndXJlOiBmZWF0dXJlZEZpZ3VyZSxcbiAgICBjb250ZW50OiBmZWF0dXJlZENvbnRlbnQsXG4gIH07XG4gIGNvbnN0IHByb2R1Y3RPcHRpb25zID0ge1xuICAgIHNjcm9sbFRvcDogc2Nyb2xsVG9wUG9zLFxuICAgIGVsZW1lbnRUb3A6IHByb2R1Y3RUb3BQb3MsXG4gICAgZmlndXJlOiBwcm9kdWN0RmlndXJlLFxuICAgIGNvbnRlbnQ6IHByb2R1Y3RDb250ZW50LFxuICB9O1xuICBmdW5jdGlvbiBhbmltYXRlT25TY3JvbGwoeyBzY3JvbGxUb3AsIGVsZW1lbnRUb3AsIGZpZ3VyZSwgY29udGVudCB9KSB7XG4gICAgaWYgKE1hdGguY2VpbChlbGVtZW50VG9wKSA8PSA3NTApIHtcbiAgICAgIGZpZ3VyZS5jbGFzc0xpc3QuYWRkKFwiYWN0aXZlXCIpO1xuICAgICAgY29udGVudC5jbGFzc0xpc3QuYWRkKFwiYWN0aXZlXCIpO1xuICAgIH0gZWxzZSB7XG4gICAgICBmaWd1cmUuY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgICAgIGNvbnRlbnQuY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgICB9XG4gIH1cbiAgYW5pbWF0ZU9uU2Nyb2xsKGZlYXR1cmVkT3B0aW9ucyk7XG4gIGFuaW1hdGVPblNjcm9sbChwcm9kdWN0T3B0aW9ucyk7XG59O1xuLyogd2luZG93IHNjcm9sbCBldmVudCBlbmQgKi9cbiJdfQ==
