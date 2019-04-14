window.addEventListener("load", function() {
  const sounds = document.querySelectorAll(".sound");
  const audios = document.querySelectorAll(".audios div");
  const visual = document.querySelector(".visual");

  const colors = ["#eff167", "#59ec7e", "#eaeaea", "#848ae9"];

  audios.forEach((audio, index) => {
    audio.addEventListener("click", function() {
      sounds[index].currentTime = 0;
      sounds[index].play();
      playAnimation(index);
    });
  });

  function playAnimation(index) {
    const div = document.createElement("div");
    div.style.background = colors[index];
    div.style.display = "block";
    div.style.animation = "1.5s jump ease-in-out";
    visual.appendChild(div);
    div.addEventListener("animationend", destroySound);
  }

  function destroySound() {
    visual.removeChild(this);
  }
});
