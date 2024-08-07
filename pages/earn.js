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

const btn = document.getElementById("trigger");

btn.addEventListener("click", () => {
  alert("clicked");
});
