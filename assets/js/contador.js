const getRemainTime = (deadline, count) => {
    let now = new Date(),
        Time = (new Date(deadline) - now + 1000) / 1000,
        remainTime = (Time) + count * 60,
        remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
        remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2);

    return {
        remainTime,
        remainSeconds,
        remainMinutes
    }
};

const countdown = (deadline, elem, cuenta) => {
    const el = document.getElementById(elem);

    const timerUpdate = setInterval( () => {
        let t = getRemainTime(deadline, cuenta);
        el.innerHTML = `${t.remainMinutes}m:${t.remainSeconds}s`;

        if (t.remainTime <= 1) {
            clearInterval(timerUpdate);
            alert("Se te ha acabado el tiempo!")
            location = "./principal.php";
        }
    }, 1000)
}
countdown(new Date(), 'clock', 60);