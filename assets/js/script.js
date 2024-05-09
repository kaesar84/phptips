let btn = document.getElementById("btn");

btn.addEventListener("click", () => {
  let pre = document.querySelector("pre");
  pre.style.display = pre.style.display === "none" ? "flex" : "none";

  if (btn.innerHTML === "Ver JSON") {
    btn.innerHTML = "Ocultar JSON";
  } else {
    btn.innerHTML = "Ver JSON";
  }

});

