const check_password = document.getElementById('check_password');
const password = document.getElementById('password');

check_password.addEventListener('click', () => {
    password.type = 'text';
});