function actualizarPrecioTotal() {
    let precioTotalPedido = 0;
    productos.forEach(producto => {
        precioTotalPedido += parseFloat(producto.precio);
    });

    let campoPrecioPedido = document.getElementById('precio');
    campoPrecioPedido.value = precioTotalPedido.toFixed(2);
}



function enviarDatos(event) {
    /*event.preventDefault();
    fetch('/pedidosInsert', {
        method: 'POST',
        credentials: "include",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            _token: document.querySelector('input[name="_token"]').value,
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
        });*/
}
document.getElementById('insert').addEventListener('click', enviarDatos);

const productos = [];
const pedido = [];
document.addEventListener('DOMContentLoaded', function () {
    cargarFormatos();

    const agregarBtn = document.querySelector('#agregarBtn');
    const tablaPedido = document.getElementById('pedidoTable');

    agregarBtn.addEventListener('click', function () {
        const producto = document.querySelector('#producto').options[document.querySelector('#producto').selectedIndex].text;
        const selectProducto = document.getElementById('producto');
        const idProducto = selectProducto.options[selectProducto.selectedIndex].value

        const selectFormato = document.getElementById('formato');
        const formato = selectFormato.options[selectFormato.selectedIndex].text;
        const idFormato = selectFormato.options[selectFormato.selectedIndex].value;

        const unidades = parseInt(document.querySelector('#unidades').value);


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

        tablaPedido.innerHTML += `
        <tr>
            <td><input type="hidden" name="id_producto[]" value="${idProducto}">${producto}</td>
            <td><input type="hidden" name="id_formato[]" value="${idFormato}">${formato}</td>
            <td><input type="hidden" name="unidades[]" value="${unidades}">${unidades}</td>
            <td><input type="hidden" name="precios[]" value="${precioTotal.toFixed(2)}">${precioTotal.toFixed(2)}</td>
            <td><button class="boton">Eliminar</button></td>
        </tr>        
        `

        for (let boton of document.getElementsByClassName('boton')) {
            boton.addEventListener('click', function (event) {
                event.preventDefault();
                console.log(tablaPedido)
                console.log(this.parentElement.parentElement)
                tablaPedido.removeChild(this.parentElement.parentElement);
                const index = productos.indexOf(nuevoProducto);
                if (index !== -1) {
                    productos.splice(index, 1);
                }
                actualizarPrecioTotal();
            });
        }

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
