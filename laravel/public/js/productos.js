import initializeCanvas from "./img.js";

let fotosInput= document.getElementsByClassName("fotoInput")
let insertCanvas = document.getElementsByClassName("insertCanvas")
let fotos = document.getElementsByClassName("foto")

for (let i = 0; i < fotosInput.length; i++) {
    initializeCanvas(fotosInput[i], insertCanvas[i], fotos[i],450,850);
}