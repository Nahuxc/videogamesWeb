/* secciones */
const sectionHome = document.getElementById("home");

const sectionForms = document.getElementById("home-forms");

/* submenu category */

const submenuCategory = document.getElementById("submenuCategory");
const btnCategory = document.getElementById("btn-subCategory");

/* sidebar active */

const btnsidebar = document.querySelector(".btn-sidebar");

const sidebar = document.getElementById("sidebar");



/* boton del inicio / home */
const btnStart = document.getElementById("home-btn");

/* formularios */
const formLogin = document.getElementById("box-login")
const formSignUp = document.getElementById("box-signup")

/* boton de cambio de formularioss */
const btnChangeSignUp = document.getElementById("changeSignup")
const btnChangeLogin = document.getElementById("changeLogin")



if(btnsidebar){
    btnsidebar.addEventListener("click", ()=>{
        sidebar.classList.toggle("activeSidebar");
    })
}


if(submenuCategory){
    btnCategory.addEventListener("click", ()=>{
        console.log("funciona");
        submenuCategory.classList.toggle("activeSubmenu");
    })
}


/* desaparecer el inicio para que aparezca el formulario */
if(sectionHome && sectionForms){
    btnStart.addEventListener("click", ()=>{

            sectionHome.classList.toggle("invisibleHome");
            sectionForms.classList.toggle("homeformsVisibility");
            
            
        })
    
}

/* cambios de formularios */

if(formSignUp && formLogin){
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
}

