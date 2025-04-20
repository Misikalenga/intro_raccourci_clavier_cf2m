// Empêcher scroll clavier
const scrollKeys = ['ArrowUp', 'ArrowDown', 'PageUp', 'PageDown', 'Home', 'End', ' '];
let scrollLocked = true;
document.addEventListener('keydown', e => {
    if (scrollLocked && scrollKeys.includes(e.key)) e.preventDefault();
});

window.unlockScroll = function () {
    scrollLocked = false;
};