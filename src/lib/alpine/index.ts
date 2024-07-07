import Alpine from "alpinejs";

window.Alpine = window.Alpine || {};

document.addEventListener("alpine:init", () => {
  window.Alpine = Alpine;

  Alpine.start();
});
