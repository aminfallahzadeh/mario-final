const overlay = document.getElementById("overlay");

const energyModal = document.getElementById("energy-modal");
const rechargeModal = document.getElementById("recharge-modal");
const tapModal = document.getElementById("tap-modal");

const openEnergyModal = document.getElementById("open-energy-modal");
const openRechargeModal = document.getElementById("open-recharge-modal");
const openTapModal = document.getElementById("open-tap-modal");

const closeModalButtons = document.querySelectorAll(".close-modal");

openEnergyModal.addEventListener("click", () => {
  if (overlay.classList.contains("hidden")) {
    overlay.classList.remove("hidden");
    energyModal.classList.remove("hidden");
  }
});

openRechargeModal.addEventListener("click", () => {
  if (overlay.classList.contains("hidden")) {
    overlay.classList.remove("hidden");
    rechargeModal.classList.remove("hidden");
  }
});

openTapModal.addEventListener("click", () => {
  if (overlay.classList.contains("hidden")) {
    overlay.classList.remove("hidden");
    tapModal.classList.remove("hidden");
  }
});

closeModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    overlay.classList.add("hidden");
    energyModal.classList.add("hidden");
    rechargeModal.classList.add("hidden");
    tapModal.classList.add("hidden");
  });
});

function dropCoins() {
  const container = document.getElementById("coins-container");
  container.classList.remove("hidden");

  const numberOfCoins = 50; // Number of coins to drop
  let coinsToRemove = numberOfCoins; // Counter for the number of coins to be removed

  for (let i = 0; i < numberOfCoins; i++) {
    // Create a new coin
    const coin = document.createElement("div");
    coin.classList.add("coin");

    // Randomize position and delay
    coin.style.left = `${Math.random() * 100}vw`;
    coin.style.top = `${Math.random() * 100}vh`; // Add vertical offset
    coin.style.animation = `fall 1s linear ${Math.random() * 0.5}s`;

    // Add coin to the container
    container.appendChild(coin);

    // Remove coin after animation
    coin.addEventListener("animationend", () => {
      container.removeChild(coin);
      coinsToRemove--;

      // Hide container if all coins have been removed
      if (coinsToRemove === 0) {
        container.classList.add("hidden");
      }
    });
  }
}

document.getElementById("trigger").addEventListener("click", () => {
  const container = document.getElementById("coins-container");
  container.classList.remove("hidden");

  const numberOfCoins = 50; // Number of coins to drop
  let coinsToRemove = numberOfCoins; // Counter for the number of coins to be removed

  for (let i = 0; i < numberOfCoins; i++) {
    // Create a new coin
    const coin = document.createElement("div");
    coin.classList.add("coin");

    // Randomize position and delay
    coin.style.left = `${Math.random() * 100}vw`;
    coin.style.top = `${Math.random() * 100}vh`; // Add vertical offset
    coin.style.animation = `fall 1s linear ${Math.random() * 0.5}s`;

    // Add coin to the container
    container.appendChild(coin);

    // Remove coin after animation
    coin.addEventListener("animationend", () => {
      container.removeChild(coin);
      coinsToRemove--;

      // Hide container if all coins have been removed
      if (coinsToRemove === 0) {
        container.classList.add("hidden");
      }
    });
  }
});
