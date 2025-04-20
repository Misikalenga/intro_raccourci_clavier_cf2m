let startTime, interval, running = false;

function startPauseChrono() {
    const button = document.getElementById('startPause');

    if (!running) {
        startTime = Date.now() - (localStorage.getItem('elapsedTime') || 0);
        interval = setInterval(updateTime, 10);
        button.innerHTML = '<i class="fas fa-pause"></i>'; // Affiche l'icône pause
        running = true;
    } else {
        clearInterval(interval);
        localStorage.setItem('elapsedTime', Date.now() - startTime);
        button.innerHTML = '<i class="fas fa-play"></i>'; // Affiche l'icône play
        running = false;
    }
}

function resetChrono() {
    clearInterval(interval);
    running = false;
    localStorage.removeItem('elapsedTime');
    document.getElementById('time').innerText = "00:00:000";
    document.getElementById('startPause').innerHTML = '<i class="fas fa-play"></i>'; // Remet play au reset
}

function updateTime() {
    const elapsed = Date.now() - startTime;
    const minutes = String(Math.floor(elapsed / 60000)).padStart(2, '0');
    const seconds = String(Math.floor((elapsed % 60000) / 1000)).padStart(2, '0');
    const milliseconds = String(elapsed % 1000).padStart(3, '0');
    document.getElementById('time').innerText = `${minutes}:${seconds}:${milliseconds}`;
}
