<script setup>
import { ref } from 'vue';
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
        <section class="container-fluid">
            <div v-for="categoria in categorias" class="row">
                <div class="col">
                    <div class="col beers">
                        <h1 class="display-2 text-center">{{ categoria.categoria }}</h1>
                        <section class="d-flex flex-wrap justify-content-center align-items-center gap-5 text-center py-3">
                            <div v-for="producto in categoria.productos"
                                class="card col-10 col-lg-3 d-flex justify-content-center align-items-center"
                                style="width: 350px; height: 730px; overflow: hidden;">
                                <div class="img"
                                    style="width: 400px; height: 400px; padding-top: 390px; position: relative;">
                                    <img :src="producto.foto" class="card-img-top" :alt="producto.nombre"
                                        style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" />
                                </div>
                                <div class="gradient-overlay"></div>
                                <div class="card-body"
                                    style="max-height: 400px; box-sizing: border-box; display: flex; flex-direction: column; overflow: hidden; align-items: center; justify-content: center;">
                                    <h4 class="nombre pb-3">{{ producto.nombre }}<span v-if="producto.new"
                                            class="badge bg-danger">NEW</span></h4>
                                    <p class="card-text d-flex justify-content-center align-items-center h-100">
                                        {{ producto.descripcion }}
                                    </p>
                                    <div class="botones d-flex gap-2 justify-content-center mt-auto pt-3">
                                        <button class="btn btn-sm" type="button"
                                            @click="annadirAlPedido(producto.id)">Comprar</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
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
}

.store {
    padding: 8rem 0rem;
}

.botones {
    width: 100%;
    border-top: 1px solid #d9803268;
}

.nombre {
    width: 100%;
    border-bottom: 1px solid #d9803268;
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