document.addEventListener('DOMContentLoaded', () => {
    const userIcon = document.querySelector('.icons img[alt="User Icon"]');
    const userMenu = document.querySelector('.user-menu');

    userIcon.addEventListener('click', () => {
        userMenu.classList.toggle('active');
    });

    document.addEventListener('click', (event) => {
        if (!userIcon.contains(event.target) && !userMenu.contains(event.target)) {
            userMenu.classList.remove('active');
        }
    });
});