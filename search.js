const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

if (prefersDarkScheme.matches) {
    themeStyle.setAttribute('href', 'dark-mode.css');
    toggleButton.textContent = 'Switch to Light Mode';
}