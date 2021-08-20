let body = document.body || document.documentElement;
let navbar = document.querySelector(".navbar");
let bars = document.querySelector(".bars .icon");
let navbarCloseBtn = document.querySelector(".navbar .close");
let themeChangeBtn = document.querySelector(".themeChangeBtn");
let featuredFigure = document.querySelector(".featured .figure");
let featuredContent = document.querySelector(".featured .main");
let productFigure = document.querySelector(".product .figure");
let productContent = document.querySelector(".product .main");

bars.onclick = function (event) {
  navbar.classList.toggle("active");
};
navbarCloseBtn.onclick = function (event) {
  navbar.classList.remove("active");
};

/* change theme */
themeChangeBtn.onclick = function (event) {
  event.preventDefault();
  body.classList.toggle("dark");
  this.firstElementChild.classList.toggle("fa-sun");
};

/* window scroll */

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

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiJtYWluLmpzIiwic291cmNlc0NvbnRlbnQiOlsibGV0IGJvZHkgPSBkb2N1bWVudC5ib2R5IHx8IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudDtcbmxldCBuYXZiYXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm5hdmJhclwiKTtcbmxldCBiYXJzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5iYXJzIC5pY29uXCIpO1xubGV0IG5hdmJhckNsb3NlQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5uYXZiYXIgLmNsb3NlXCIpO1xubGV0IHRoZW1lQ2hhbmdlQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi50aGVtZUNoYW5nZUJ0blwiKTtcbmxldCBmZWF0dXJlZEZpZ3VyZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuZmVhdHVyZWQgLmZpZ3VyZVwiKTtcbmxldCBmZWF0dXJlZENvbnRlbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmZlYXR1cmVkIC5tYWluXCIpO1xubGV0IHByb2R1Y3RGaWd1cmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnByb2R1Y3QgLmZpZ3VyZVwiKTtcbmxldCBwcm9kdWN0Q29udGVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIucHJvZHVjdCAubWFpblwiKTtcblxuYmFycy5vbmNsaWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gIG5hdmJhci5jbGFzc0xpc3QudG9nZ2xlKFwiYWN0aXZlXCIpO1xufTtcbm5hdmJhckNsb3NlQnRuLm9uY2xpY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgbmF2YmFyLmNsYXNzTGlzdC5yZW1vdmUoXCJhY3RpdmVcIik7XG59O1xuXG4vKiBjaGFuZ2UgdGhlbWUgKi9cbnRoZW1lQ2hhbmdlQnRuLm9uY2xpY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgYm9keS5jbGFzc0xpc3QudG9nZ2xlKFwiZGFya1wiKTtcbiAgdGhpcy5maXJzdEVsZW1lbnRDaGlsZC5jbGFzc0xpc3QudG9nZ2xlKFwiZmEtc3VuXCIpO1xufTtcblxuLyogd2luZG93IHNjcm9sbCAqL1xuXG53aW5kb3cub25zY3JvbGwgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgY29uc3Qgc2Nyb2xsVG9wUG9zID0gd2luZG93LnBhZ2VZT2Zmc2V0IHx8IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5zY3JvbGxUb3A7XG4gIGNvbnN0IGZlYXR1cmVkVG9wUG9zID0gZmVhdHVyZWRGaWd1cmUuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wO1xuICBjb25zdCBwcm9kdWN0VG9wUG9zID0gcHJvZHVjdEZpZ3VyZS5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKS50b3A7XG4gIGNvbnN0IGZlYXR1cmVkT3B0aW9ucyA9IHtcbiAgICBzY3JvbGxUb3A6IHNjcm9sbFRvcFBvcyxcbiAgICBlbGVtZW50VG9wOiBmZWF0dXJlZFRvcFBvcyxcbiAgICBmaWd1cmU6IGZlYXR1cmVkRmlndXJlLFxuICAgIGNvbnRlbnQ6IGZlYXR1cmVkQ29udGVudCxcbiAgfTtcbiAgY29uc3QgcHJvZHVjdE9wdGlvbnMgPSB7XG4gICAgc2Nyb2xsVG9wOiBzY3JvbGxUb3BQb3MsXG4gICAgZWxlbWVudFRvcDogcHJvZHVjdFRvcFBvcyxcbiAgICBmaWd1cmU6IHByb2R1Y3RGaWd1cmUsXG4gICAgY29udGVudDogcHJvZHVjdENvbnRlbnQsXG4gIH07XG4gIGZ1bmN0aW9uIGFuaW1hdGVPblNjcm9sbCh7IHNjcm9sbFRvcCwgZWxlbWVudFRvcCwgZmlndXJlLCBjb250ZW50IH0pIHtcbiAgICBpZiAoTWF0aC5jZWlsKGVsZW1lbnRUb3ApIDw9IDc1MCkge1xuICAgICAgZmlndXJlLmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG4gICAgICBjb250ZW50LmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG4gICAgfSBlbHNlIHtcbiAgICAgIGZpZ3VyZS5jbGFzc0xpc3QucmVtb3ZlKFwiYWN0aXZlXCIpO1xuICAgICAgY29udGVudC5jbGFzc0xpc3QucmVtb3ZlKFwiYWN0aXZlXCIpO1xuICAgIH1cbiAgfVxuICBhbmltYXRlT25TY3JvbGwoZmVhdHVyZWRPcHRpb25zKTtcbiAgYW5pbWF0ZU9uU2Nyb2xsKHByb2R1Y3RPcHRpb25zKTtcbn07XG4iXX0=
