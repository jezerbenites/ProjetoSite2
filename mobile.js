const mobileMenu = document.querySelector('.mobile-menu');

function toggleMenu() {
    const navList = document.querySelector('.nav-list');
    navList.classList.toggle('active');
    mobileMenu.classList.toggle('active');
}

mobileMenu.addEventListener("click", toggleMenu)
