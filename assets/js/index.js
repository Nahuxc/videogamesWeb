/* secciones */
const sectionHome = document.getElementById("home");

const sectionForms = document.getElementById("home-forms");

/* boton del inicio / home */
const btnStart = document.getElementById("home-btn");

/* formularios */
const formLogin = document.getElementById("box-login")
const formSignUp = document.getElementById("box-signup")

/* boton de cambio de formularioss */
const btnChangeSignUp = document.getElementById("changeSignup")
const btnChangeLogin = document.getElementById("changeLogin")


/* desaparecer el inicio para que aparezca el formulario */
btnStart.addEventListener("click", ()=>{
    sectionHome.classList.toggle("invisibleHome");
    sectionForms.classList.toggle("homeformsVisibility");
})


/* cambios de formularios */


/* cambiar al formulario de registro */
btnChangeSignUp.addEventListener("click", ()=>{
    formSignUp.classList.toggle("visibleSignup")
    formLogin.classList.toggle("invisibleLogin")
})

/* cambiar al formulario de login */
btnChangeLogin.addEventListener("click", ()=>{
    formSignUp.classList.remove("visibleSignup")
    formLogin.classList.remove("invisibleLogin")
})