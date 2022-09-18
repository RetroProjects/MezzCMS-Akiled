const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const toggle = document.getElementById('toggleDark');
const body = document.querySelector('.container');
const title = document.querySelector('.title');
const title1 = document.querySelector('.title1');

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'white';
        body.style.color = 'black';
		title.style.color = '#444';
		title1.style.color = '#444';
        body.style.transition = '2s';
		 localStorage.setItem('darkMode', 'disable');
    }else{
        body.style.background = '#1e1c1c';
        body.style.color = 'white';
		title.style.color = 'white';
		title1.style.color = 'white';
        body.style.transition = '2s';
		localStorage.setItem('darkMode', 'enabled');
    }
	  darkMode = localStorage.getItem('darkMode'); 
  
  // if it not current enabled, enable it
  if (darkMode !== 'enabled') {
    enableDarkMode();
  // if it has been enabled, turn it off  
  } else {  
    disableDarkMode(); 
  }
});
// check for saved 'darkMode' in localStorage
let darkMode = localStorage.getItem('darkMode'); 

const enableDarkMode = () => {
  body.style.background = '#1e1c1c';
        body.style.color = 'white';
		title.style.color = 'white';
		title1.style.color = 'white';
        body.style.transition = '2s';
}

const disableDarkMode = () => {
	 this.classList.toggle('bi-moon');
   body.style.background = 'white';
        body.style.color = 'black';
		title.style.color = '#444';
		title1.style.color = '#444';
        body.style.transition = '2s';
  localStorage.setItem('darkMode', 'disable');
}
 
// If the user already visited and enabled darkMode
// start things off with it on
if (darkMode === 'enabled') {
  enableDarkMode();
}

