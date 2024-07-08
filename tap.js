// const img = document.getElementById("tap-effect");
// let touchTimeout;

// img.addEventListener("touchstart", (event) => {
//   event.preventDefault();
//   img.style.transform = "scale(0.95)";
// });

// img.addEventListener("touchend", (event) => {
//   event.preventDefault();
//   img.style.transform = "scale(1)";

//   Array.from(event.changedTouches).forEach((touch) => {
//     const touchX = touch.clientX;
//     const touchY = touch.clientY;

//     const plusOne = document.createElement("div");
//     plusOne.className = "plus-one";
//     plusOne.innerText = "+1";
//     document.body.appendChild(plusOne);

//     plusOne.style.left = `${touchX}px`;
//     plusOne.style.top = `${touchY}px`;

//     setTimeout(() => {
//       plusOne.remove();
//     }, 1000);
//   });
// });

const img = document.getElementById("tap-effect");
let touchTimeout;

// Track the number of active touches
let activeTouches = 0;

img.addEventListener("touchstart", (event) => {
  event.preventDefault();

  // Increment active touches
  activeTouches++;

  // Only scale down if this is the first touch
  if (activeTouches === 1) {
    img.style.transform = "scale(0.95)";
  }
});

img.addEventListener("touchend", (event) => {
  event.preventDefault();

  // Decrement active touches
  activeTouches--;

  // Only scale back if there are no more active touches
  if (activeTouches === 0) {
    img.style.transform = "scale(1)";
  }

  Array.from(event.changedTouches).forEach((touch) => {
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
  });
});

img.addEventListener("touchcancel", (event) => {
  // Handle touchcancel event to maintain proper scaling
  activeTouches = 0;
  img.style.transform = "scale(1)";
});
