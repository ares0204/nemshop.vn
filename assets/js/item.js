function showLargeImage(largeImagePath) {
  const largeImage = document.querySelector(".content__img-big-img");
  largeImage.src = largeImagePath;

  const smallImages = document.querySelectorAll(".content__img-small-item-img");
  smallImages.forEach((smallImage) => {
    smallImage.classList.remove("content__img-small-item-img--active");
  });

  const clickedImage = event.target;
  clickedImage.classList.add("content__img-small-item-img--active");
}