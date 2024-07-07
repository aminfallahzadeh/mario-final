// TAP TO EARN EFFECT
const img = document.getElementById("tap-effect");

img.addEventListener("touchstart", (event) => {
  event.preventDefault();

  const rect = img.getBoundingClientRect();
  const imgX = rect.left + rect.width / 2;
  const imgY = rect.top + rect.height / 2;

  img.style.transformOrigin = "center center";
  img.style.transition = "transform 0.15s ease";

  const threshold = rect.width * 0.1;

  Array.from(event.touches).forEach((touch) => {
    const touchX = touch.clientX;
    const touchY = touch.clientY;

    img.style.transform = "scale(0.90)";

    const plusOne = document.createElement("div");
    plusOne.className = "plus-one";
    plusOne.innerText = "+1";
    document.body.appendChild(plusOne);

    plusOne.style.position = "absolute";
    plusOne.style.left = `${touchX}px`;
    plusOne.style.top = `${touchY}px`;

    setTimeout(() => {
      img.style.transform = "rotateY(0deg) rotateX(0deg) scale(1)";
    }, 100);

    setTimeout(() => {
      plusOne.remove();
    }, 1000);
  });
});

// const img = document.getElementById("tap-effect");

// img.addEventListener("touchstart", (event) => {
//   event.preventDefault();

//   const rect = img.getBoundingClientRect();
//   img.style.transformOrigin = "center center";
//   img.style.transition = "transform 0.15s ease";

//   img.style.transform = "scale(0.95)";
// });

// img.addEventListener("touchend", (event) => {
//   const rect = img.getBoundingClientRect();

//   Array.from(event.changedTouches).forEach((touch) => {
//     const touchX = touch.clientX;
//     const touchY = touch.clientY;

//     const plusOne = document.createElement("div");
//     plusOne.className = "plus-one";
//     plusOne.innerText = "+1";
//     document.body.appendChild(plusOne);

//     plusOne.style.position = "absolute";
//     plusOne.style.left = `${touchX}px`;
//     plusOne.style.top = `${touchY}px`;

//     img.style.transform = "scale(1)";

//     setTimeout(() => {
//       plusOne.remove();
//     }, 1000);
//   });
// });
