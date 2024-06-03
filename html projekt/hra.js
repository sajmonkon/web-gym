let count = 0;
let timeLeft = 10;
let timer;

document.getElementById('squat-button').addEventListener('click', () => {
    if (timeLeft > 0) {
        count++;
        document.querySelector('.counter').textContent = count;
    }
});

document.getElementById('start-button').addEventListener('click', () => {
    startTimer();
    document.getElementById('start-button').disabled = true;
    document.getElementById('squat-button').disabled = false;
});

function startTimer() {
    document.getElementById('timer').textContent = `Zbývající čas: ${timeLeft}s`;
    timer = setInterval(() => {
        if (timeLeft > 0) {
            timeLeft--;
            document.getElementById('timer').textContent = `Zbývající čas: ${timeLeft}s`;
        } else {
            clearInterval(timer);
            document.getElementById('squat-button').disabled = true;
            if (count < 50) {
                document.getElementById('challenge-image').src = 'failimage.gif';
                document.querySelector('.message').textContent = `Bohužel, udělal jsi méně než 50 Mewů.`;
            } else {
                document.getElementById('challenge-image').src = 'endimage.gif';
                document.querySelector('.message').textContent = `Skvělá práce! Udělal jsi ${count} Mewů!`;
            }
        }
    }, 1000);
}