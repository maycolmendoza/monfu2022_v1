let box = document.querySelector("#preloader"),
    btn = document.querySelector("#skip");

function fadeOut() {
    box.classList.add("visuallyhidden");
    box.addEventListener(
        "transitionend",
        function(e) {
            box.classList.add("hidden");
        }, {
            capture: false,
            once: true,
            passive: false
        }
    );
}
btn.addEventListener("click", fadeOut, false);
setTimeout(fadeOut, 4000);



////


