document.addEventListener('DOMContentLoaded', () => {
    const root = document.documentElement;
    const toggle = document.getElementById('themeToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const openMenu = document.getElementById('openMenu');
    function setTheme(dark) {
        if (dark) {
            root.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            root.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    }
    const saved = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(saved ? saved === 'dark' : prefersDark);
    if (toggle) {
        toggle.addEventListener('click', () => {
            setTheme(!root.classList.contains('dark'));
        });
    }
    if (openMenu && mobileMenu) {
        openMenu.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});