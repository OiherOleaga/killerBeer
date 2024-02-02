<script setup>
import { ref, computed } from 'vue';


const emit = defineEmits("changeCarrito");
const pedido = ref([]);

const mensaje = ref("No hay productos en el pedido");

const precioTotal = computed(() => {
    let total = 0;

    for (let producto of pedido.value) {
        total += producto.precio * producto.unidades;
    }

    return total.toFixed(2);
})

let pedidoJson = localStorage.getItem("pedido");

if (pedidoJson && pedidoJson !== '[]') {

    POST("/getPedido", `{ "pedido" : ${pedidoJson} }`).then(res => {
        pedido.value = res.pedido;
        console.log(pedido.value)
        setTimeout(() => {
            for (let i = 0; pedido.value.length; i++) {
                setPrecio(i);
            }
        }, 200);
    })
}



function tramitarPedido() {
    POST("/tramitarPedido", pedido.value).then((res) => {
        if (res.insertado) {
            pedido.value = [];
            mensaje.value = "Pedido realizado";
            localStorage.setItem("pedido", "[]");
        } else {
            alert("error al hacer el pedido")
        }
    })
}

function setPrecio(index) {
    let select = document.getElementById("selectFormatos" + index);
    let option = select[select.selectedIndex];
    pedido.value[index].precio = option.value;
    pedido.value[index].id_formato_producto = parseInt(option.getAttribute("idFormatoProducto"));
}

function quitar(index, id) {

    pedido.value.splice(index, 1);
    let pedido2 = JSON.parse(localStorage.getItem("pedido"));

    index = undefined;
    for (let i = 0; i < pedido2.length; i++) {
        if (pedido2[i] == id) {
            index = i;
            i = pedido2.length;
        }
    }

    if (index !== undefined) {
        pedido2.splice(index, 1);
    }

    emit("changeCarrito", pedido2.length);
    localStorage.setItem("pedido", JSON.stringify(pedido2));
}

</script>


<template>
    <section class="pedido">
        <div class="container-fluid">
            <div class="pedidos row justify-content-center  gap-3">
                <div class="cesta col-10 col-md-8 p-4">
                    <div class="row">
                        <h2>Cesta</h2>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div v-if="!(pedido.length)">{{ mensaje }}</div>
                            <div v-else v-for="(producto, index) in pedido" :key="index" class="row">
                                <hr class="hr">
                                <div class="col d-flex flex-wrap gap-4 align-items-center">
                                    <div>
                                        <img :src="producto.foto" alt="foto producto">
                                    </div>
                                    <div class="col-5">
                                        <div class="row">
                                            <h1>{{ producto.nombre }}</h1>
                                            <p v-if="producto.envioGratis">Envio <span class="h6">GRATIS</span> disponible
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p>{{ producto.descripcion }}</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <select @change="setPrecio(index)" :id="'selectFormatos' + index">
                                                <option v-if="producto.formatos" v-for="formato in JSON.parse(producto.formatos)"
                                                    :value="formato.precio" :idFormatoProducto="formato.idFormatoProducto">{{ formato.tipo }}</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <input type="number" v-model="producto.unidades" min="1" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <h4 class="h4 text-end">{{ (producto.precio * producto.unidades).toFixed(2) }} €
                                            </h4>
                                        </div>
                                        <div class="row p-2 justify-content-end"> <button class="btn"
                                                @click="quitar(index, producto.id)">Quitar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-md-2 comprar">
                    <h1>Pedido</h1>
                    <p>Subtotal (de {{ pedido.length }} productos): <span class="h5">{{ precioTotal }} €</span></p>
                    <button class="btn w-100 mb-2" @click="tramitarPedido">Tramitar pedido</button>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.pedido {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8rem 0;
    min-height: 100vh;
}

.cesta,
.comprar {
    border-radius: 5px;
    color: #D98032;
    border: 3px solid #D98032;
    box-shadow: 0px 0px 30px #A65221;
}

.comprar {
    height: fit-content;
}

.pedido img {
    height: 160px;
    width: 160px;
}

.cesta button {
    color: #D98032;
    text-align: center;
    width: fit-content;
    text-decoration: underline;
}

.comprar .btn {
    cursor: pointer;
    position: relative;
    padding: 5px 10px;
    background: #A65221;
    font-size: 16px;
    font-weight: 700;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    transition: all .5s;

    &:after,
    &:before {
        content: " ";
        width: 10px;
        height: 10px;
        position: absolute;
        border: 0px solid #A65221;
        transition: all .5s;
    }

    &:after {
        top: -1px;
        left: -1px;
        border-top: 5px solid black;
        border-left: 5px solid black;
    }

    &:before {
        bottom: -1px;
        right: -1px;
        border-bottom: 5px solid black;
        border-right: 5px solid black;
    }

    &:hover {
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        background: rgba(0, 0, 0, .5);
        color: #A65221;

        &:before,
        &:after {
            width: 100%;
            height: 36px;
            border-color: #A65221;
        }
    }
}
</style>