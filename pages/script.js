document.addEventListener("DOMContentLoaded", function () {
  // helpers
  // SEPARATE NUMBERS WITH COMMA
  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  // FORMAT BIG NUMBERS WITH K AND M
  function kFormatter(num) {
    if (Math.abs(num) > 999 && Math.abs(num) < 999_999) {
      return Math.sign(num) * (Math.abs(num) / 1000).toFixed(1) + "k";
    } else if (Math.abs(num) > 999_999 && Math.abs(num) < 999_999_999) {
      return Math.sign(num) * (Math.abs(num) / 1_000_000).toFixed(1) + "m";
    } else if (Math.abs(num) > 999_999_999) {
      return Math.sign(num) * (Math.abs(num) / 1_000_000_000).toFixed(1) + "b";
    } else {
      return Math.sign(num) * Math.abs(num);
    }
  }

  // ELEMENTS
  const img = document.getElementById("tap-effect");
  let totalCoinElement = document.getElementById("total-coin");
  let earnPerTapElement = document.getElementById("per-tap-value");
  let coinsToLvlUpElement = document.getElementById("coins-to-lvl-up");
  let profitPerHourElement = document.getElementById("profit-per-hour");
  let currentLvlElement = document.getElementById("current-lvl");
  let experienceElement = document.getElementById("experience");
  let currentEnergyElement = document.getElementById("current-energy");
  let maxEnergyElement = document.getElementById("max-energy");

  // TIME OUT
  let touchTimeout;

  // COIN VALUES
  totalCoins = 1000000;
  earnPerTap = 3;
  coinsToLvlUp = 15_000;
  profitPerHour = 0;
  currentLvl = 1;

  currentEnergy = 500;
  maxEnergy = 500;

  let experience = (totalCoins / coinsToLvlUp) * 100;
  experience = experience.toFixed(2);

  // INITIAL VALUES ON SCREEN
  totalCoinElement.innerText =
    totalCoins >= 10_000_000
      ? kFormatter(totalCoins)
      : numberWithCommas(totalCoins);
  earnPerTapElement.innerText = numberWithCommas(earnPerTap);
  coinsToLvlUpElement.innerText = kFormatter(coinsToLvlUp);
  profitPerHourElement.innerText = kFormatter(profitPerHour);
  currentLvlElement.innerText = currentLvl;
  currentEnergyElement.innerText = currentEnergy;
  maxEnergyElement.innerText = maxEnergy;

  experienceElement.style.width =
    experience < 10 ? "10%" : experience > 98 ? "98%" : `${experience}%`;

  img.style.transform = "scale(1)";

  // TAP TO EARN LOGIC & ANIMATION
  const handleImgClick = (e) => {
    const img = e.currentTarget;
    const rect = img.getBoundingClientRect();
    const x = e.clientX - rect.left - rect.width / 2;
    const y = e.clientY - rect.top - rect.height / 2;

    // Check if user has energy left
    if (currentEnergy < earnPerTap) {
      return;
    }

    img.style.transform = `perspective(1000px) rotateX(${-y / 7}deg) rotateY(${
      x / 7
    }deg)`;

    const clickX = e.clientX;
    const clickY = e.clientY;

    const plusOne = document.createElement("div");
    plusOne.className = "plus-one";
    plusOne.innerText = "+" + earnPerTap;
    document.body.appendChild(plusOne);

    plusOne.style.left = `${clickX}px`;
    plusOne.style.top = `${clickY}px`;

    setTimeout(() => {
      plusOne.remove();
    }, 1000);

    // Increment total coins and update the display
    totalCoins += earnPerTap;
    totalCoinElement.innerText = numberWithCommas(totalCoins);

    // Decrement current energy and update the display
    if (currentEnergy >= earnPerTap) {
      currentEnergy -= earnPerTap;
      currentEnergyElement.innerText = currentEnergy;
    }

    // Calculate experience with each tap
    experience = `${((totalCoins / coinsToLvlUp) * 100).toFixed(2)}`;
    experienceElement.style.width =
      experience < 10 ? "10%" : experience > 98 ? "98%" : `${experience}%`;

    setTimeout(() => {
      img.style.transform = "perspective(1000px)";
    }, 150);
  };

  img.addEventListener("click", handleImgClick);

  // INCREMENT ENERGY ONE PER SECOND
  setInterval(() => {
    if (currentEnergy < maxEnergy) {
      currentEnergy++;
      currentEnergyElement.innerText = currentEnergy;
    }
  }, 1000);
});
