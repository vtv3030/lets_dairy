// JavaScript to handle navigation and active states
const navItems = document.querySelectorAll('.nav-item');

function toggleActiveState() {
    navItems.forEach(item => {
        item.classList.remove('active');
    });

    this.classList.add('active');
}

navItems.forEach(item => {
    item.addEventListener('click', toggleActiveState);
});