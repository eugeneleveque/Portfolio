// selector
// document.querySelector("h4").style.background = "yellow";
// const baliseHTML = document.querySelector("h4");

// Click event
const questioncoutainer = document.querySelector(".click-event");
const btn1 = document.querySelector("#btn-1");
const btn2 = document.getElementById("btn-2");
const response = document.querySelector("p");

questioncoutainer.addEventListener("click", () => {
  questioncoutainer.classList.toggle("question-clicked");
});

btn1.addEventListener("click", () => {
  response.classList.add("show-response");
  response.style.background = "green";
});
btn2.addEventListener("click", () => {
  response.classList.add("show-response");
  response.style.background = "red";
});

// #id > .class > balise HTML

// -----------------------------------------------------------------------------------
// Mousse Events

const mousemove = document.querySelector(".mousemove");

window.addEventListener("mousemove", (e) => {
  mousemove.style.left = e.pageX + "px";
  mousemove.style.top = e.pageY + "px";
});

window.addEventListener("mousedown", () => {
  mousemove.style.transform = "scale(2) translate(-25%, -25%)";
});
window.addEventListener("mouseup", () => {
  mousemove.style.transform = "scale(1) translate(-50%, -50%)";
  mousemove.style.border = "2px solid teal";
});
questioncoutainer.addEventListener("mouseenter", () => {
  questioncoutainer.style.background = "rgba(0,0,0,0.6)";
});
questioncoutainer.addEventListener("mouseout", () => {
  questioncoutainer.style.background = "pink";
});

response.addEventListener("mouseover", () => {
  response.style.transform = "rotate(2deg)";
});

// --------------------------------------------------------------------------------------------
// keypress event

const keypressCoutainer = document.querySelector(".keypress");
const key = document.getElementById("key");
const ring = (key) => {
  const audio = new Audio();
  audio.src = key + ".mp3";
  audio.play();
};

document.addEventListener("keypress", (e) => {
  key.textContent = e.key;
  if (e.key === "j") {
    keypressCoutainer.style.background = "pink";
  } else if (e.key === "h") {
    keypressCoutainer.style.background = "teal";
  } else {
    keypressCoutainer.style.background = "purple";
  }
  ring("z");
});

// -------------------------------------------------------------------------------------
// scroll event

const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
  // console.log(window.scrollY);

  if (window.scrollY > 120) {
    nav.style.top = 0;
  } else {
    nav.style.top = "-50px";
  }
});

// -------------------------------------------------------------------------------------
// Form Event
const inputName = document.querySelector('input[type="text"]');
const select = document.querySelector("select");
const form = document.querySelector("form");
let pseudo = "";
let language = "";

inputName.addEventListener("input", (e) => {
  pseudo = e.target.value;
});

select.addEventListener("input", (e) => {
  language = e.target.value;
});
form.addEventListener("submit", (e) => {
  e.preventDefault();

  if (cgv.checked) {
    document.querySelector("form > div").innerHTML = `
      <h3>Pseudo : ${pseudo}</h3>
      <h4>language préféré : ${language}</h4>
    `;
  } else {
    alert("veuillez acceper les CGV");
  }
});

// ----------------------------------------------------------------------------------------
// load event
window.addEventListener("load", () => {
  // console.log("Document Chargé !");
});

// -------------------------------------------------------------------------------------------
// ForEach
// const boxes = document.getElementByClassname("boxes")
const boxes = document.querySelectorAll(".box");

// console.log(boxes);

boxes.forEach((box) => {
  box.addEventListener("click", (e) => {
    e.target.style.transform = "scale(0.7)";
  });
});

// ---------------------------------------------------------------------------------------------
// addevenlistener Vs onclick
// document.body.onscroll = function () {
//   console.log("scroll !");
// };

// Bubbling => fin (de  base l'eventlistener est paramétré en mode bubbling)
// (pas obliger de mettre false)
document.body.addEventListener(
  "click",
  () => {
    console.log("click 1 !");
  },
  false
);

// usecapture (se déclenche en premier dans les évenements)
document.body.addEventListener(
  "click",
  () => {
    console.log("click 2 !");
  },
  true
);

// ----------------------------------------------------------------------------------------------
// stop propagation
questioncoutainer.addEventListener("click", (e) => {
  e.stopPropagation();
});

// removeEventListener

// -------------------------------------------------------------------------------------------
// BOM (Brother Object Model)

// console.log(window.innerHeight);
// console.log(window.innerWidth);
// window.open("https://google.com", "cours js", "height=400px, widht = 400px");

// Confirm
btn2.addEventListener("click", () => {
  confirm("voulez-vous vraiment vous tromper ?");
});

// prompt
btn1.addEventListener("click", () => {
  let answer = prompt("entrez votre nom");
  questioncoutainer.innerHTML += "<h3>bravo " + answer + "</h3>";
});

// timer, compte à rebours
setTimeout(() => {
  questioncoutainer.style.borderRadius = "300px";
}, 5000);

// // let interval = setInterval(() => {
//   document.body.innerHTML += `
//     <div class='box'>
//       <h2>nouvelle boite !</h2>
//     </div>`;
// }, 1000);

// document.body.addEventListener("click", (e) => {
//   e.target.remove();
//   clearInterval(interval);
// });

// // Locaton
// console.log(location.href);
// console.log(location.host);
// console.log(location.pathname);
// console.log(location.search);
// location.replace("http://lequipe.fr");

// window.onload = () => {
//   location.href = "https://twitter.fr";
// };

// Navigator
// console.log(navigator.userAgent);

// History

// console.log(history);
// // window.history.back();
// history.go(-2);

// -----------------------------------------------------------------------------------------
// setProperty
// window;
// addEventListener("mousemove", (e) => {
//   nav.style.setProperty("--x", e.layerX + "px");
//   nav.style.setProperty("--y", e.layerY + "px");
// });
