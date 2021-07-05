// Wrap every letter in a span
var textWrapper = document.querySelector(".ml11 .letters");
textWrapper.innerHTML = textWrapper.textContent.replace(
    /([^\x00-\x80]|\w)/g,
    "<span class='letter'>$&</span>"
);
