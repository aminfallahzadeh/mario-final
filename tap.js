// const img = document.getElementById("tap-effect");
// let touchTimeout;

// img.addEventListener("touchstart", (event) => {
//   event.preventDefault();
//   img.style.transform = "scale(0.95)";
// });

// img.addEventListener("touchend", (event) => {
//   event.preventDefault();

//   Array.from(event.changedTouches).forEach((touch) => {
//     const touchX = touch.clientX;
//     const touchY = touch.clientY;

//     img.style.transform = "scale(1)";

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
let touchCount = 0;

img.addEventListener("touchstart", (event) => {
  event.preventDefault();
  touchCount += event.touches.length;

  if (touchCount === event.touches.length) {
    requestAnimationFrame(() => {
      img.style.transform = "scale(0.95)";
    });
  }
});

img.addEventListener("touchend", (event) => {
  event.preventDefault();

  touchCount -= event.changedTouches.length;

  if (touchCount === 0) {
    requestAnimationFrame(() => {
      img.style.transform = "scale(1)";
    });
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
