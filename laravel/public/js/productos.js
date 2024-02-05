import initializeCanvas from "./img.js";

let fotosInput= document.getElementsByClassName("fotoInput")
let insertCanvas = document.getElementsByClassName("insertCanvas")
let fotos = document.getElementsByClassName("foto")

for (let i = 0; i < fotosInput.length; i++) {
    initializeCanvas(fotosInput[i], insertCanvas[i], fotos[i],450,850);
}

for (let input of document.querySelectorAll('input[name="formatos[]"]')) {

    if (input.checked) {
        input.setAttribute("borrable", input.value);
        input.previousElementSibling.setAttribute("valorAnterior", input.previousElementSibling.value);
    }

    input.previousElementSibling.addEventListener("input", function() {
        input.checked = true;
    })

    input.addEventListener("click", () => {
        if (!input.checked) {
            input.previousElementSibling.value = "";
            if (input.getAttribute("borrable") !== undefined) {
                input.parentElement.querySelector('input[type="hidden"]').value = input.value;
            }
        } else if (input.getAttribute("borrable") !== undefined) {
            input.parentElement.querySelector('input[type="hidden"]').value = -1;
            input.previousElementSibling.value = input.previousElementSibling.getAttribute("valorAnterior");
        }
    })
}