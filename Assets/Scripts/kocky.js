if (window.innerWidth < 1100) {
  var pc = document.getElementsByClassName("pribeh-container");
  for (var i = 0; i < vice.length; i++) {
    pc[i].addEventListener("click", (e) => {
      var pribeh = e.currentTarget.querySelector(".pribeh");
      var pribehz = e.currentTarget.querySelector(".vice #pribeh_of");

      if (pribeh.classList.contains("zavrene")) {
        pribeh.setAttribute("style", "display: block");
        pribeh.classList.remove("zavrene");
        pribeh.classList.add("opened");
        pribehz.innerHTML = "Skrýt příběh";
      } else {
        pribeh.setAttribute("style", "display: none");
        pribeh.classList.remove("opened");
        pribeh.classList.add("zavrene");
        pribehz.innerHTML = "Zobrazit příběh";
      }
    });
  }
} else {
  close();
}
