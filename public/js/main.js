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
  console.log(productOptions);
  animateOnScroll(productOptions);
};

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6Im1haW4uanMiLCJzb3VyY2VzQ29udGVudCI6WyJsZXQgYm9keSA9IGRvY3VtZW50LmJvZHkgfHwgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50O1xubGV0IG5hdmJhciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubmF2YmFyXCIpO1xubGV0IGJhcnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmJhcnMgLmljb25cIik7XG5sZXQgbmF2YmFyQ2xvc2VCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm5hdmJhciAuY2xvc2VcIik7XG5sZXQgdGhlbWVDaGFuZ2VCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnRoZW1lQ2hhbmdlQnRuXCIpO1xubGV0IGZlYXR1cmVkRmlndXJlID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5mZWF0dXJlZCAuZmlndXJlXCIpO1xubGV0IGZlYXR1cmVkQ29udGVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuZmVhdHVyZWQgLm1haW5cIik7XG5sZXQgcHJvZHVjdEZpZ3VyZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIucHJvZHVjdCAuZmlndXJlXCIpO1xubGV0IHByb2R1Y3RDb250ZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5wcm9kdWN0IC5tYWluXCIpO1xuXG5iYXJzLm9uY2xpY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgbmF2YmFyLmNsYXNzTGlzdC50b2dnbGUoXCJhY3RpdmVcIik7XG59O1xubmF2YmFyQ2xvc2VCdG4ub25jbGljayA9IGZ1bmN0aW9uIChldmVudCkge1xuICBuYXZiYXIuY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbn07XG5cbi8qIGNoYW5nZSB0aGVtZSAqL1xudGhlbWVDaGFuZ2VCdG4ub25jbGljayA9IGZ1bmN0aW9uIChldmVudCkge1xuICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICBib2R5LmNsYXNzTGlzdC50b2dnbGUoXCJkYXJrXCIpO1xuICB0aGlzLmZpcnN0RWxlbWVudENoaWxkLmNsYXNzTGlzdC50b2dnbGUoXCJmYS1zdW5cIik7XG59O1xuXG4vKiB3aW5kb3cgc2Nyb2xsICovXG5cbndpbmRvdy5vbnNjcm9sbCA9IGZ1bmN0aW9uIChldmVudCkge1xuICBjb25zdCBzY3JvbGxUb3BQb3MgPSB3aW5kb3cucGFnZVlPZmZzZXQgfHwgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcDtcbiAgY29uc3QgZmVhdHVyZWRUb3BQb3MgPSBmZWF0dXJlZEZpZ3VyZS5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKS50b3A7XG4gIGNvbnN0IHByb2R1Y3RUb3BQb3MgPSBwcm9kdWN0RmlndXJlLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpLnRvcDtcbiAgY29uc3QgZmVhdHVyZWRPcHRpb25zID0ge1xuICAgIHNjcm9sbFRvcDogc2Nyb2xsVG9wUG9zLFxuICAgIGVsZW1lbnRUb3A6IGZlYXR1cmVkVG9wUG9zLFxuICAgIGZpZ3VyZTogZmVhdHVyZWRGaWd1cmUsXG4gICAgY29udGVudDogZmVhdHVyZWRDb250ZW50LFxuICB9O1xuICBjb25zdCBwcm9kdWN0T3B0aW9ucyA9IHtcbiAgICBzY3JvbGxUb3A6IHNjcm9sbFRvcFBvcyxcbiAgICBlbGVtZW50VG9wOiBwcm9kdWN0VG9wUG9zLFxuICAgIGZpZ3VyZTogcHJvZHVjdEZpZ3VyZSxcbiAgICBjb250ZW50OiBwcm9kdWN0Q29udGVudCxcbiAgfTtcbiAgZnVuY3Rpb24gYW5pbWF0ZU9uU2Nyb2xsKHsgc2Nyb2xsVG9wLCBlbGVtZW50VG9wLCBmaWd1cmUsIGNvbnRlbnQgfSkge1xuICAgIGlmIChNYXRoLmNlaWwoZWxlbWVudFRvcCkgPD0gNzUwKSB7XG4gICAgICBmaWd1cmUuY2xhc3NMaXN0LmFkZChcImFjdGl2ZVwiKTtcbiAgICAgIGNvbnRlbnQuY2xhc3NMaXN0LmFkZChcImFjdGl2ZVwiKTtcbiAgICB9IGVsc2Uge1xuICAgICAgZmlndXJlLmNsYXNzTGlzdC5yZW1vdmUoXCJhY3RpdmVcIik7XG4gICAgICBjb250ZW50LmNsYXNzTGlzdC5yZW1vdmUoXCJhY3RpdmVcIik7XG4gICAgfVxuICB9XG4gIGFuaW1hdGVPblNjcm9sbChmZWF0dXJlZE9wdGlvbnMpO1xuICBjb25zb2xlLmxvZyhwcm9kdWN0T3B0aW9ucyk7XG4gIGFuaW1hdGVPblNjcm9sbChwcm9kdWN0T3B0aW9ucyk7XG59O1xuIl19
