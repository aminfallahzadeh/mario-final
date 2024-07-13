// CARD LIST LINKS
const myCardsLink = document.getElementById("my-cards-link");
const newCardsLink = document.getElementById("new-cards-link");
const flagCardsLink = document.getElementById("flag-cards-link");
const specialsLink = document.getElementById("special-cards-link");

// CARDS LISTS
const myCardsList = document.getElementById("my-cards");
const newCardsList = document.getElementById("new-cards");
const flagCardsList = document.getElementById("flag-cards-list");
const specialsList = document.getElementById("special-cards-list");

myCardsLink.addEventListener("click", () => {
  myCardsList.classList.remove("hidden");
  flagCardsList.classList.add("hidden");
  newCardsList.classList.add("hidden");
  specialsList.classList.add("hidden");

  myCardsLink.classList.add("active-cards");
  flagCardsLink.classList.remove("active-cards");
  newCardsLink.classList.remove("active-cards");
  specialsLink.classList.remove("active-cards");
});

newCardsLink.addEventListener("click", () => {
  newCardsList.classList.remove("hidden");
  flagCardsList.classList.add("hidden");
  specialsList.classList.add("hidden");
  myCardsList.classList.add("hidden");

  flagCardsLink.classList.remove("active-cards");
  newCardsLink.classList.add("active-cards");
  myCardsLink.classList.remove("active-cards");
  specialsLink.classList.remove("active-cards");
});

flagCardsLink.addEventListener("click", () => {
  flagCardsList.classList.remove("hidden");
  newCardsList.classList.add("hidden");
  myCardsList.classList.add("hidden");
  specialsList.classList.add("hidden");

  myCardsLink.classList.remove("active-cards");
  newCardsLink.classList.remove("active-cards");
  flagCardsLink.classList.add("active-cards");
  specialsLink.classList.remove("active-cards");
});

specialsLink.addEventListener("click", () => {
  myCardsList.classList.add("hidden");
  newCardsList.classList.add("hidden");
  flagCardsList.classList.add("hidden");
  specialsList.classList.remove("hidden");

  myCardsLink.classList.remove("active-cards");
  newCardsLink.classList.remove("active-cards");
  flagCardsLink.classList.remove("active-cards");
  specialsLink.classList.add("active-cards");
});
