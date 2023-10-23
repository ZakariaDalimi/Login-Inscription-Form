const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');

const allLabel= document.getElementsByName('label');

function funcBlur(label){
    label.style.top='-3px';
}

function register(){
    wrapper.classList.add('active');
}

function login(){
    wrapper.classList.remove('active');
}



