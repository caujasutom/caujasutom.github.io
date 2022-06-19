function delay(a) {
  return new Promise(b => setTimeout(b, a))
}
var count = 0;
async function openNav() {
  var e = document.querySelector(".hamburger-menu:hover .bar-top"),
      b = document.querySelector(".hamburger-menu:hover .bar-middle"),
      f = document.querySelector(".hamburger-menu:hover .bar-bottom"),
      g = document.getElementsByClassName("navbar"),
      c = document.querySelectorAll(".navbar a"),
      h = document.querySelector(".navbar ul"),
      d = document.querySelectorAll(".navbar li"),
      i = document.querySelector(".social");
  if (0 == count) {
      g[0].style.height = "100%", e.style.transform = "rotate(45deg)", b.style.transform = "translateX(1rem)", b.style.opacity = "0.0", f.style.transform = "rotate(-45deg)", await delay(150), h.style.display = "flex";
      for (var a = 0; a < d.length; a++) d[a].style.display = "flex";
      for (var a = 0; a < c.length; a++) c[a].style.display = "flex";
      count = 1
  } else {
      g[0].style.height = "5em", e.style.transform = "rotate(0deg)", b.style.transform = "translateX(0rem)", b.style.opacity = "1.0", f.style.transform = "rotate(0deg)", i.display = "none", h.style.display = "none";
      for (var a = 0; a < d.length; a++) d[a].style.display = "none";
      for (var a = 0; a < c.length; a++) c[a].style.display = "none";
      count = 0
  }
}
