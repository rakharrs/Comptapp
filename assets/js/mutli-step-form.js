const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
//create an array of title for .title class elements
const titles = document.querySelector(".title");
const step_displayer = document.querySelector(".completion-step");
const step_number = document.querySelector(".step-number");
const list = [
    "Society information",
    "Legal information",
    "Contact information",
    "Account information",
    "Login Information",
];

const step_list = [
  "Get Started",
  "Legal Details",
  "Contact Details",
  "Account Details",
  "Almost done"
]

let formStepsNum = 0;

window.addEventListener("load", () => {
  //update the title of the first form step using list[0]
  updateTitles();
  updateStep();
});

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
    updateTitles();
    updateStep();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
    updateTitles();
    updateStep();
  });
});

function updateTitles() {
  titles.innerHTML = list[formStepsNum];
}

function updateStep(){
  step_displayer.innerHTML = step_list[formStepsNum];
  step_number.innerHTML = "("+(formStepsNum + 1)+"/5)";
}

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}
