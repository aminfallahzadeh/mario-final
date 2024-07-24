const overlay = document.getElementById("overlay");
const energyModal = document.getElementById("energy-modal");
const rechargeModal = document.getElementById("recharge-modal");
const openEnergyModal = document.getElementById("open-energy-modal");
const openRechargeModal = document.getElementById("open-recharge-modal");

const closeModalButtons = document.querySelectorAll(".close-modal");

openEnergyModal.addEventListener("click", () => {
  overlay.classList.remove("hidden");
  energyModal.classList.remove("hidden");
});

closeModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    overlay.classList.add("hidden");
    energyModal.classList.add("hidden");
    rechargeModal.classList.add("hidden");
  });
});

openRechargeModal.addEventListener("click", () => {
  overlay.classList.remove("hidden");
  rechargeModal.classList.remove("hidden");
});
