// halaman utama

// date
var countDate = new Date("Nov 22,2024 15:37:22").getTime();
var x = setInterval(function () {
  var now = new Date().getTime();
  var distance = countDate - now;
  var hari = Math.floor(distance / (1000 * 60 * 60 * 24));
  var jam = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var menit = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var detik = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("hari").innerHTML = hari;
  document.getElementById("jam").innerHTML = jam;
  document.getElementById("menit").innerHTML = menit;
  document.getElementById("detik").innerHTML = detik;
  document.getElementById("hari2").innerHTML = hari;
  document.getElementById("jam2").innerHTML = jam;
  document.getElementById("menit2").innerHTML = menit;
  document.getElementById("detik2").innerHTML = detik;
}, 1000);

// DOM

const openinvit = document.querySelector(".open-invit");
const start = document.querySelector(".start");
const lagu = document.querySelector(".lagu");
const player = document.querySelector(".player");
const pauser = document.querySelector(".pauser");
const img7 = document.querySelector(".hal7-img");

// const bagian2 = document.querySelector(".bagian2");
// const start2 = document.querySelector(".start2");

// bagian2.classList.add("ganti1");

openinvit.addEventListener("click", function () {
  lagu.play();
  start.classList.add("none");
  gsap.from(".start2", {
    duration: 2,
    y: -100,
    opacity: 0,
  });
});

player.classList.add("opa0");

pauser.addEventListener("click", function () {
  lagu.pause();
  player.classList.remove("opa0");
  pauser.classList.add("opa0");
});

player.addEventListener("click", function () {
  lagu.play();
  pauser.classList.remove("opa0");
  player.classList.add("opa0");
});

const gallery = document.querySelectorAll(".gallery");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

if (gallery) {
  gallery.forEach(function (image, index) {
    image.onclick = function () {
      let getElementCss = window.getComputedStyle(image);
      let getFullImgUrl = getElementCss.getPropertyValue("background-image");
      let getImgUrlPos = getFullImgUrl.split("/img/");
      let setNewImgUrl = getImgUrlPos[1].replace('")', "");
      getLatestOpenedImg = index + 1;

      let container = document.body;
      let newImgWindow = document.createElement("div");
      container.appendChild(newImgWindow);
      newImgWindow.setAttribute("class", "img-window");
      newImgWindow.setAttribute("onclick", "closeImg()");

      let newImg = document.createElement("img");
      newImgWindow.appendChild(newImg);
      newImg.setAttribute("src", "../img/" + setNewImgUrl);
    };
  });
}

function closeImg() {
  document.querySelector(".img-window").remove();
}
