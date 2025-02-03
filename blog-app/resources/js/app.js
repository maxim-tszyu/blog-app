import './bootstrap';
const userMenuButton = document.getElementById('user-menu-button');
const userMenu = document.getElementById('user-menu');

userMenuButton.addEventListener('click', (event) => {
    event.stopPropagation();
    userMenu.classList.toggle('hidden');
});

window.addEventListener('click', (event) => {
    if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
        userMenu.classList.add('hidden');
    }
});
