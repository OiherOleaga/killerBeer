function actualizarPrecioTotal() {
    let precioTotalPedido = 0;
    productos.forEach(producto => {
        precioTotalPedido += parseFloat(producto.precio);
    });

    let campoPrecioPedido = document.getElementById('precio');
    campoPrecioPedido.value = precioTotalPedido.toFixed(2);
}



function enviarDatos(event) {
    event.preventDefault();
    fetch('/pedidos/insert', {
        method: 'POST',
        credentials: "include",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            productos: productos,
            pedido: {
                id_cliente: document.getElementById('cliente').value,
                estado: document.getElementById('estado').value,
                fecha_entrega: document.getElementById('fecha').value,
                precio: document.getElementById('precio').value
            }
        })
    })
        .then(response => {
            if (!response.ok) {
                return response.text();
            }
            return response.json();
        })
        .then(data => {
            console.log('Productos enviados correctamente al servidor:', data);
        })
        .catch(error => {
            console.error('Error al enviar los productos al servidor:', error);
        });
}
document.getElementById('insert').addEventListener('click', enviarDatos);

const productos = [];
const pedido = [];
document.addEventListener('DOMContentLoaded', function () {
    cargarFormatos();

    const agregarBtn = document.querySelector('#agregarBtn');
    const tablaPedido = document.querySelector('#pedidoTable');

    agregarBtn.addEventListener('click', function () {
        const producto = document.querySelector('#producto').options[document.querySelector('#producto').selectedIndex].text;
        const formato = document.querySelector('#formato').options[document.querySelector('#formato').selectedIndex].text;
        const unidades = parseInt(document.querySelector('#unidades').value);
        const selectFormato = document.getElementById('formato');
        const opcionSeleccionada = selectFormato.options[selectFormato.selectedIndex];
        const precioFormato = parseFloat(opcionSeleccionada.getAttribute('data-precio'));

        const precioTotal = precioFormato * unidades;

        const nuevoProducto = {
            id_productos: producto,
            id_formatos: formato,
            unidades: unidades,

            precio: precioTotal
        };

        productos.push(nuevoProducto);

        const fila = document.createElement('tr');

        const celdaProducto = document.createElement('td');
        celdaProducto.textContent = producto;
        fila.appendChild(celdaProducto);

        const celdaFormato = document.createElement('td');
        celdaFormato.textContent = formato;
        fila.appendChild(celdaFormato);
        const celdaUnidades = document.createElement('td');
        celdaUnidades.textContent = unidades;
        fila.appendChild(celdaUnidades);

        const celdaPrecio = document.createElement('td');
        celdaPrecio.textContent = precioTotal.toFixed(2);
        fila.appendChild(celdaPrecio);

        const celdaEliminar = document.createElement('td');
        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.addEventListener('click', function () {
            tablaPedido.removeChild(fila);
            // Elimina el producto del array productos
            const index = productos.indexOf(nuevoProducto);
            if (index !== -1) {
                productos.splice(index, 1);
            }
            // Actualiza el precio total después de eliminar un producto
            actualizarPrecioTotal();
        });
        celdaEliminar.appendChild(botonEliminar);
        fila.appendChild(celdaEliminar);

        tablaPedido.appendChild(fila);

        // Actualiza el precio total después de agregar un producto
        actualizarPrecioTotal();
    });

    function cargarFormatos() {
        let id_producto = document.getElementById("producto").value;
        let selectFormato = document.getElementById("formato");

        fetch('/productos/filtrar/' + id_producto)
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('La red respondió con un error.');
                }
                return response.json();
            })
            .then(function (data) {
                selectFormato.innerHTML = '';
                data.formatos.forEach(function (formato) {
                    console.log(formato);

                    let option = document.createElement('option');
                    option.value = formato.id;
                    option.textContent = formato.tipo;
                    option.setAttribute('data-precio', formato.precio);

                    selectFormato.appendChild(option);
                });

            })


            .catch(function (error) {
                console.error('Hubo un problema con la solicitud fetch:', error.message);
            });
    }

    document.getElementById("producto").addEventListener("change", cargarFormatos);


})
