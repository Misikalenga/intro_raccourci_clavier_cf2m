// === Création dynamique du HTML ===
const chronoContainer = document.createElement('div');
chronoContainer.id = 'chrono';
chronoContainer.className = 'chrono shadow border border-1 border-dark gap-2 position-fixed top-0 start-50 translate-middle-x p-2 w-auto w-sm-25 w-md-20 w-lg-15';

const timeDisplay = document.createElement('p');
timeDisplay.id = 'time';
timeDisplay.className = 'chrono-time mb-0';
timeDisplay.innerText = '00:00:000';

const startPauseBtn = document.createElement('button');
startPauseBtn.id = 'startPause';
startPauseBtn.className = 'btn btn-primary p-2 chrono-btn';
startPauseBtn.innerHTML = '<i class="fas fa-play"></i>';

const resetBtn = document.createElement('button');
resetBtn.id = 'reset';
resetBtn.className = 'btn btn-danger p-2 chrono-btn';
resetBtn.innerHTML = '<i class="fas fa-sync"></i>';

chronoContainer.append(timeDisplay, startPauseBtn, resetBtn);
document.body.appendChild(chronoContainer);

// === Logique du chrono ===
let startTime, intervalId, running = false;

function updateTime() {
    const elapsed = Date.now() - startTime;
    const minutes = String(Math.floor(elapsed / 60000)).padStart(2, '0');
    const seconds = String(Math.floor((elapsed % 60000) / 1000)).padStart(2, '0');
    const ms = String(elapsed % 1000).padStart(3, '0');
    timeDisplay.innerText = `${minutes}:${seconds}:${ms}`;
}

function startPauseChrono() {
    if (!running) {
        startTime = Date.now() - (Number(localStorage.getItem('elapsedTime')) || 0);
        intervalId = setInterval(updateTime, 10);
        startPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        running = true;
    } else {
        clearInterval(intervalId);
        localStorage.setItem('elapsedTime', Date.now() - startTime);
        startPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        running = false;
    }
}

function resetChrono() {
    clearInterval(intervalId);
    running = false;
    localStorage.removeItem('elapsedTime');
    timeDisplay.innerText = '00:00:000';
    startPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
}

// === Ajout des listeners ===
startPauseBtn.addEventListener('click', startPauseChrono);
resetBtn.addEventListener('click', resetChrono);
document.getElementById('startButton')?.addEventListener('click', startPauseChrono);
