// Empêcher le scroll clavier
let scrollLocked = true;
const scrollKeys = ['ArrowUp', 'ArrowDown', 'PageUp', 'PageDown', 'Home', 'End', 'Tab', ' '];

document.addEventListener('keydown', e => {
    if (scrollLocked && scrollKeys.includes(e.key)) {
        e.preventDefault();
    }

    // Empêcher la navigation avec Tab
    if (scrollLocked && e.key === 'Tab') {
        e.preventDefault();
        document.activeElement.blur(); // Désactive le focus sur l'élément en cours
    }
});

// Fonction pour déverrouiller le scroll
window.unlockScroll = function () {
    scrollLocked = false;
};
