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
  });

  touchTimeout = setTimeout(() => {
    img.style.transform = "scale(1)";
  }, 100);
});

img.addEventListener("touchend", (event) => {
  clearTimeout(touchTimeout);
  img.style.transform = "scale(1)";
});
