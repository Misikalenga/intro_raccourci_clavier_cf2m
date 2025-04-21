document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.getElementsByClassName("toggleDarkMode");

    // Vérifier si le mode nuit est activé et changer l'icône
    if (localStorage.getItem("darkMode") === "enabled") {
        document.body.classList.add("dark-mode");
        for (let btn of buttons) {
            btn.innerHTML = "🔆"; // Icône Soleil
        }
    }

    for (let btn of buttons) {
        btn.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");

            // Changer l'icône en fonction du mode
            if (document.body.classList.contains("dark-mode")) {
                localStorage.setItem("darkMode", "enabled");
                btn.innerHTML = "🔆"; // Mode Nuit -> Soleil
            } else {
                localStorage.setItem("darkMode", "disabled");
                btn.innerHTML = "🌙"; // Mode Jour -> Lune
            }
        });
    }
});
