// CARD LIST LINKS
const myCardsLink = document.getElementById("my-cards-link");
const newCardsLink = document.getElementById("new-cards-link");
const flagCardsLink = document.getElementById("flag-cards-link");

// CARDS LISTS
const myCardsList = document.getElementById("my-cards");
const newCardsList = document.getElementById("new-cards");
const flagCardsList = document.getElementById("flag-cards-list");

myCardsLink.addEventListener("click", () => {
  myCardsList.classList.remove("hidden");
  flagCardsList.classList.add("hidden");
  newCardsList.classList.add("hidden");

  myCardsLink.classList.add("active-cards");
  flagCardsLink.classList.remove("active-cards");
  newCardsLink.classList.remove("active-cards");
});

newCardsLink.addEventListener("click", () => {
  newCardsList.classList.remove("hidden");
  flagCardsList.classList.add("hidden");
  myCardsList.classList.add("hidden");

  flagCardsLink.classList.remove("active-cards");
  newCardsLink.classList.add("active-cards");
  myCardsLink.classList.remove("active-cards");
});

flagCardsLink.addEventListener("click", () => {
  myCardsLink.classList.remove("active-cards");
  newCardsLink.classList.remove("active-cards");
  flagCardsLink.classList.add("active-cards");

  flagCardsList.classList.remove("hidden");
  newCardsList.classList.add("hidden");
  myCardsList.classList.add("hidden");
});
