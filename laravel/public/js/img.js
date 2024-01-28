function initializeCanvas(inputFoto, canvas, outputFoto, width, height, cambioFoto) {
    inputFoto = document.querySelector(inputFoto);
    canvas = document.querySelector(canvas);
    outputFoto = document.querySelector(outputFoto);

    if (!height) {
        height = width;
    }

    const contexto = canvas.getContext('2d');
    let imagen = new Image();
    let isDragging = false;
    let x, y;
    let offsetX;
    let offsetY;

    if (canvas.getAttribute("src")) {
        imagen.src = canvas.getAttribute("src");

        imagen.onload = function () {
            canvas.width = width;
            canvas.height = height;

            x = (width - imagen.width) / 2;
            y = (height - imagen.height) / 2;

            reDrawImg(false);
        };
    }

    inputFoto.addEventListener("change", () => {
        if (inputFoto.files && inputFoto.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagen = new Image();
                imagen.src = e.target.result;

                imagen.onload = function () {
                    canvas.width = width;
                    canvas.height = height;

                    x = (width - imagen.width) / 2;
                    y = (height - imagen.height) / 2;

                    reDrawImg(true);
                };
            };

            reader.readAsDataURL(inputFoto.files[0]);
        }
    });

    inputFoto.addEventListener("change", () => {
        if (inputFoto.files && inputFoto.files[0]) {
            const reader = new FileReader();

            canvas.addEventListener("mousedown", (e) => {
                isDragging = true;
                offsetX = e.clientX - x;
                offsetY = e.clientY - y;
            });

            canvas.addEventListener("mousemove", (e) => {
                if (isDragging) {
                    x = e.clientX - offsetX;
                    y = e.clientY - offsetY;
                    reDrawImg(true);
                }
            });

            canvas.addEventListener("mouseup", () => {
                isDragging = false;
            });

            canvas.addEventListener("mouseleave", () => {
                isDragging = false;
            });

            canvas.addEventListener("wheel", (e) => {
                e.preventDefault();

                const scaleFactor = e.deltaY < 0 ? 1.05 : 0.95;

                imagen.width *= scaleFactor;
                imagen.height *= scaleFactor;

                reDrawImg(true);
            });

            reader.onload = function (e) {
                imagen = new Image();
                imagen.src = e.target.result;

                imagen.onload = function () {
                    canvas.width = width;
                    canvas.height = height;
                    reDrawImg(true);
                };
            };

            reader.readAsDataURL(inputFoto.files[0]);
        }

    })

    function reDrawImg(guardar) {
        contexto.clearRect(0, 0, canvas.width, canvas.height);
        contexto.drawImage(imagen, x, y, imagen.width, imagen.height);

        if (guardar) {
            let extension = inputFoto.value.substring(inputFoto.value.lastIndexOf(".") + 1, inputFoto.value.length);
            outputFoto.value = canvas.toDataURL('image/' + extension);
            outputFoto.setAttribute("name", outputFoto.id);
            if (cambioFoto) {
                cambioFoto.setAttribute("name", cambioFoto.id);
            }
        }
    }
}


export default initializeCanvas;