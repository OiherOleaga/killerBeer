document.addEventListener('DOMContentLoaded', function () {
    const agregarBtn = document.querySelector('#agregarBtn');
    const tablaPedido = document.querySelector('#pedidoTable');

    agregarBtn.addEventListener('click', function () {
        const producto = document.querySelector('#producto').options[document.querySelector('#producto').selectedIndex].text;
        const formato = document.querySelector('#formato').options[document.querySelector('#formato').selectedIndex].text;
        const unidades = document.querySelector('#unidades').value;

        // Crear una nueva fila
        const fila = document.createElement('tr');

        // Insertar celdas con los datos del pedido
        const celdaProducto = document.createElement('td');
        celdaProducto.textContent = producto;
        fila.appendChild(celdaProducto);

        const celdaFormato = document.createElement('td');
        celdaFormato.textContent = formato;
        fila.appendChild(celdaFormato);

        const celdaUnidades = document.createElement('td');
        celdaUnidades.textContent = unidades;
        fila.appendChild(celdaUnidades);

        const celdaEliminar = document.createElement('td');
        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.addEventListener('click', function () {
            tablaPedido.removeChild(fila);
        });
        celdaEliminar.appendChild(botonEliminar);
        fila.appendChild(celdaEliminar);

        tablaPedido.appendChild(fila);
    });

    id_producto = document.getElementById("producto")
})
