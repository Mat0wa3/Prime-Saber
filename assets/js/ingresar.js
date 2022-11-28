const sign_in_btn = document.querySelector("#sign-in-btn"),
sign_up_btn = document.querySelector("#sign-up-btn"),
back = document.querySelector(".btn__back"),
container = document.querySelector(".container"),
password = document.querySelector("#iclave"),
toggle = document.querySelector("#ieye"),
password2 = document.querySelector("#iclave2"),
toggle2 = document.querySelector("#ieye2");

sign_up_btn.addEventListener('click', () => {
    container.classList.add("sign-up-mode");
    back.style.borderColor = "#4481eb";
    back.style.color = "#4481eb";
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove("sign-up-mode");
    back.style.borderColor = "#fff";
    back.style.color = "#fff";
});

function showHide() {
    if (password.type == 'password') {
        password.setAttribute('type', 'text');
        toggle.style.color='#4481eb';
    } else {
        password.setAttribute('type', 'password');
        toggle.style.color='#acacac';
    }
}

function showHide2() {
    if (password2.type == 'password') {
        password2.setAttribute('type', 'text');
        toggle2.style.color='#4481eb';
    } else {
        password2.setAttribute('type', 'password');
        toggle2.style.color='#acacac';
    }
}