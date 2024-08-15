const btnStart = document.getElementById("home-btn");

const sectionHome = document.getElementById("home");

const sectionForms = document.getElementById("home-forms");

const formLogin = document.getElementById("box-login")
const formSignUp = document.getElementById("box-signup")

const btnChangeSignUp = document.getElementById("changeSignup")
const btnChangeLogin = document.getElementById("changeLogin")

btnStart.addEventListener("click", ()=>{
    sectionHome.classList.toggle("invisibleHome");
    sectionForms.classList.toggle("homeformsVisibility");
})

btnChangeSignUp.addEventListener("click", ()=>{
    formSignUp.classList.toggle("visibleSignup")
    formLogin.classList.toggle("invisibleLogin")
})

btnChangeLogin.addEventListener("click", ()=>{
    formSignUp.classList.remove("visibleSignup")
    formLogin.classList.remove("invisibleLogin")
})