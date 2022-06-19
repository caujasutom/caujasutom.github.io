function delay(time) {
  return new Promise((resolve) => setTimeout(resolve, time))
}

var count = 0

async function openNav() {
  var b1 = document.querySelector(".hamburger-menu:hover .bar-top")
  var b2 = document.querySelector(".hamburger-menu:hover .bar-middle")
  var b3 = document.querySelector(".hamburger-menu:hover .bar-bottom")
  var navbar = document.getElementsByClassName("navbar")
  var a = document.querySelectorAll(".navbar a")
  var ul = document.querySelector(".navbar ul")
  var li = document.querySelectorAll(".navbar li")
  var social = document.querySelector(".social")

  if (count == 0) {
    navbar[0].style.height = "100%"
    b1.style.transform = "rotate(45deg)"
    b2.style.transform = "translateX(1rem)"
    b2.style.opacity = "0.0"
    b3.style.transform = "rotate(-45deg)"

    await delay(150)
    ul.style.display = "flex"


    for (var i = 0; i < li.length; i++) {
      li[i].style.display = "flex"
    }
    for (var i = 0; i < a.length; i++) {
      a[i].style.display = "flex"
    }
    count = 1
  } else {
    navbar[0].style.height = "5em"
    b1.style.transform = "rotate(0deg)"
    b2.style.transform = "translateX(0rem)"
    b2.style.opacity = "1.0"
    b3.style.transform = "rotate(0deg)"

    social.display = "none"
    ul.style.display = "none"
    for (var i = 0; i < li.length; i++) {
      li[i].style.display = "none"
    }
    for (var i = 0; i < a.length; i++) {
      a[i].style.display = "none"
    }
    count = 0
  }
}
