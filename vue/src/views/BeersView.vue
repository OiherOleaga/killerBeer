<script setup>
import {ref} from 'vue';
const categorias = ref("");
GET("/categoriasProducto").then((res) => {
    categorias.value = res.categoriasProducto;       
    console.log(categorias.value)
})

function annadirAlPedido(idProducto) {

    let pedido = JSON.parse(localStorage.getItem("pedido")) ?? [];
    if (pedido.indexOf(idProducto) == -1) {
        pedido.push(idProducto);
        localStorage.setItem("pedido", JSON.stringify(pedido));
    }
}

</script>

<template>
    <section class="store overflow-hidden">
        <div v-for="categoria in categorias" class="row">
            <div class="col">
                <div class="col beers">
                    <h1 class="display-2 text-center">{{ categoria.categoria }}</h1>
                    <section class="d-flex flex-wrap justify-content-center align-items-center gap-5 text-center py-3">
                        <div v-for="producto in categoria.productos" class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
                            <img :src="producto.foto"
                                class="card-img-top" alt="green iguana" />
                            <div class="gradient-overlay"></div>
                            <div class="card-body">
                                <h4>{{ producto.nombre }}<span v-if="producto.new" class="badge bg-danger">NEW</span></h4>
                                <p class="card-text">
                                    {{ producto.descripcion }}
                                </p>
                                <hr class="hr">
                                <div class="botones d-flex gap-2 justify-content-center">
                                    <button class="btn btn-sm" type="button" @click="annadirAlPedido(producto.id)">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.gradient-overlay {
    position: absolute;
    bottom: 1;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(255, 255, 255, 0)60%, rgb(255, 255, 255, .3));
    pointer-events: none;
    /* Asegura que el overlay no capture eventos del ratón */
}

.store {
    padding: 8rem 0rem;
}

.beers h1 {
    color: #D98032;
    transform: rotate(0deg);
    text-decoration: underline;
    text-shadow: 0px 0px 10px#A65221;
    font-weight: 600;
    transform: rotate(-.6deg);
    font-style: italic;
    text-transform: uppercase;
}

.card {
    background-color: #212226;
    color: #D98032;
    gap: 10px;
    width: 350px;
    border: 3px solid #D98032;
    box-shadow: 0px 0px 30px #A65221;
}

.store {
    background: linear-gradient(rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, .7)) 100%, url(../components/img/hermosa-foto-campo-afilar-cielo-nublado.jpg);
    background-size: cover;
    background-position: bottom;
}

.btn {
    cursor: pointer;
    position: relative;
    padding: 10px 20px;
    background: #A65221;
    font-size: 20px;
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
            height: 52px;
            border-color: #A65221;
        }
    }
}
</style>