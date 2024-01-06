document.getElementById("hamburger-button").addEventListener("click", () => {
  document.getElementById("menu-dialog").classList.remove("hidden")
  document.getElementById("hamburger-button").classList.add("hidden")
})

const closeButton = document.getElementById("close-button")

closeButton.addEventListener("click", () => {
  document.getElementById("menu-dialog").classList.add("hidden")
  document.getElementById("hamburger-button").classList.remove("hidden")
})
