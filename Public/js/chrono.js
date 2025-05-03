document.addEventListener("DOMContentLoaded", () => {
    // === Création dynamique du HTML ===
    const chronoContainer = document.createElement('div');
    chronoContainer.id = 'chrono';
    chronoContainer.className = 'chrono shadow border border-1 border-dark gap-2 position-fixed top-0 start-50 translate-middle-x p-2 w-auto w-sm-25 w-md-20 w-lg-15';
    
    const timeDisplay = document.createElement('p');
    timeDisplay.id = 'time';
    timeDisplay.className = 'chrono-time mb-0';
    timeDisplay.innerText = '00:00:000';
    
    chronoContainer.append(timeDisplay);
    document.body.appendChild(chronoContainer);

    const startButton = document.getElementById("startButton");
    const validerButtons = document.querySelectorAll(".btn-valider");

    let startTime, intervalId;
    let running = localStorage.getItem("running") === "true";
    let savedElapsedTime = parseInt(localStorage.getItem("elapsedTime")) || 0;
    let exerciceValide = localStorage.getItem("exerciceValide") === "true"; // Vérification si l'exercice est validé

    function updateTime() {
        const elapsedTime = Date.now() - startTime;
        const minutes = Math.floor(elapsedTime / 60000);
        const seconds = Math.floor((elapsedTime % 60000) / 1000);
        const milliseconds = elapsedTime % 1000;
        
        timeDisplay.innerText = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}:${milliseconds.toString().padStart(3, '0')}`;
        localStorage.setItem("elapsedTime", elapsedTime);
    }

    function startChrono() {
        startTime = Date.now() - savedElapsedTime;
        intervalId = setInterval(updateTime, 10);
        localStorage.setItem("running", "true");
    }

    function stopChrono() {
        clearInterval(intervalId);
        savedElapsedTime = Date.now() - startTime;
        localStorage.setItem("elapsedTime", savedElapsedTime);
        localStorage.setItem("running", "false");
        localStorage.setItem("exerciceValide", "true");
    
        fetch("Models/CrudModel.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `time=${savedElapsedTime}&user=${currentUser}` // 🔴 Envoie aussi le nom de l'utilisateur
        })
        .then(response => response.json())
        .then(data => {
            console.log("Réponse du serveur :", data);
            alert(data.message || "Erreur d'enregistrement !");
        })
        .catch(error => console.error("Erreur d'enregistrement :", error));
        
    
        // 🔴 Réinitialisation après validation correcte
        savedElapsedTime = 0;
        localStorage.setItem("elapsedTime", 0);
        timeDisplay.innerText = "00:00:000";
    
        startTime = null;
        running = false;
    }
    
    if (startButton) {
        startButton.addEventListener("click", () => {
            if (!running) {
                startChrono();
                running = true;
            }
        });
    }

    if (validerButtons.length > 0) {
        validerButtons[validerButtons.length - 1].addEventListener("click", () => {
            const lastExerciseId = "editor-exercise5";
            const lastTextarea = document.getElementById(lastExerciseId);

            // 🟢 Vérifier si l'exercice est correctement validé
            if (running && lastTextarea && lastTextarea.value.trim() === "Félicitations, tu as réussi !") {
                stopChrono(); // Stoppe le chrono et envoie le score au serveur
                running = false;
            }
        });
    }

    // 🟢 Reprise automatique uniquement si l'exercice **n'est pas encore validé**
    if (running && !exerciceValide) {
        startChrono();
    }
});
