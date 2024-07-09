const img = document.getElementById("tap-effect");
let totalCoinElement = document.getElementById("total-coin");

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

let touchTimeout;
totalCoins = 1000;
totalCoinElement.innerText = numberWithCommas(totalCoins);

img.addEventListener("touchstart", (event) => {
  event.preventDefault();
  img.style.transform = "scale(0.95)";

  Array.from(event.touches).forEach((touch) => {
    const touchX = touch.clientX;
    const touchY = touch.clientY;

    const plusOne = document.createElement("div");
    plusOne.className = "plus-one";
    plusOne.innerText = "+1";
    document.body.appendChild(plusOne);

    plusOne.style.left = `${touchX}px`;
    plusOne.style.top = `${touchY}px`;

    setTimeout(() => {
      plusOne.remove();
    }, 1000);

    // Increment total coins and update the display
    totalCoins += 1;
    totalCoinElement.innerText = numberWithCommas(totalCoins);
  });

  touchTimeout = setTimeout(() => {
    img.style.transform = "scale(1)";
  }, 100);
});

img.addEventListener("touchend", (event) => {
  clearTimeout(touchTimeout);
  img.style.transform = "scale(1)";
});
