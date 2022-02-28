const panels = document.querySelectorAll(".apanel");

console.log(panels);

panels.forEach((panel) => {
  //   console.log(panel);

  panel.addEventListener("click", () => {
    console.log(123);
    removeActiveClasses();
    panel.classList.add("active");
  });
});

function removeActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove("active");
  });
}
