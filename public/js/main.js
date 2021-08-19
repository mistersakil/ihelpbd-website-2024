let body = document.body || document.documentElement;
let navbar = document.querySelector(".navbar");
let bars = document.querySelector(".bars .icon");
let navbarCloseBtn = document.querySelector(".navbar .close");
let themeChangeBtn = document.querySelector(".themeChangeBtn");
let featuredFigure = document.querySelector(".featured .figure");
let featuredContent = document.querySelector(".featured .main");

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
  const { top } = featuredFigure.getBoundingClientRect();
  if (scrollTopPos >= Math.ceil(top)) {
    featuredFigure.classList.add("active");
    featuredContent.classList.add("active");
  } else {
    featuredFigure.classList.remove("active");
    featuredContent.classList.remove("active");
  }
};

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoibWFpbi5qcyIsInNvdXJjZXNDb250ZW50IjpbImxldCBib2R5ID0gZG9jdW1lbnQuYm9keSB8fCBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQ7XG5sZXQgbmF2YmFyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5uYXZiYXJcIik7XG5sZXQgYmFycyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYmFycyAuaWNvblwiKTtcbmxldCBuYXZiYXJDbG9zZUJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubmF2YmFyIC5jbG9zZVwiKTtcbmxldCB0aGVtZUNoYW5nZUJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIudGhlbWVDaGFuZ2VCdG5cIik7XG5sZXQgZmVhdHVyZWRGaWd1cmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmZlYXR1cmVkIC5maWd1cmVcIik7XG5sZXQgZmVhdHVyZWRDb250ZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5mZWF0dXJlZCAubWFpblwiKTtcblxuYmFycy5vbmNsaWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gIG5hdmJhci5jbGFzc0xpc3QudG9nZ2xlKFwiYWN0aXZlXCIpO1xufTtcbm5hdmJhckNsb3NlQnRuLm9uY2xpY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgbmF2YmFyLmNsYXNzTGlzdC5yZW1vdmUoXCJhY3RpdmVcIik7XG59O1xuXG4vKiBjaGFuZ2UgdGhlbWUgKi9cbnRoZW1lQ2hhbmdlQnRuLm9uY2xpY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgYm9keS5jbGFzc0xpc3QudG9nZ2xlKFwiZGFya1wiKTtcbiAgdGhpcy5maXJzdEVsZW1lbnRDaGlsZC5jbGFzc0xpc3QudG9nZ2xlKFwiZmEtc3VuXCIpO1xufTtcblxuLyogd2luZG93IHNjcm9sbCAqL1xuXG53aW5kb3cub25zY3JvbGwgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgY29uc3Qgc2Nyb2xsVG9wUG9zID0gd2luZG93LnBhZ2VZT2Zmc2V0IHx8IGRvY3VtZW50LmRvY3VtZW50RWxlbWVudC5zY3JvbGxUb3A7XG4gIGNvbnN0IHsgdG9wIH0gPSBmZWF0dXJlZEZpZ3VyZS5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKTtcbiAgaWYgKHNjcm9sbFRvcFBvcyA+PSBNYXRoLmNlaWwodG9wKSkge1xuICAgIGZlYXR1cmVkRmlndXJlLmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG4gICAgZmVhdHVyZWRDb250ZW50LmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG4gIH0gZWxzZSB7XG4gICAgZmVhdHVyZWRGaWd1cmUuY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgICBmZWF0dXJlZENvbnRlbnQuY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgfVxufTtcbiJdfQ==
