<script setup>
import { ref } from "vue";
const pedidos = ref([]);
GET("/getPedidos").then((res) => {
    console.log(res);
    pedidos.value = res.pedidos;
})

</script>

<template>
    <section class="historial">
        <div class="container-fluid">
            <div class="historiales row justify-content-center mx-4">
                <div class="pedidos col-12 p-4">
                    <div class="row">
                        <div class="col flex-wrap d-flex align-items-center justify-content-between">
                            <div>
                                <h2>Mis Pedidos</h2>
                            </div>
                            <div>
                                <form action="">
                                    <select name="" id="" class="">
                                        <option value="ultimos30dias">ultimos 30 dias</option>
                                        <option value="ultimos3meses">ultimos 3 meses</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div v-for="(pedido, index) in pedidos" :key="index" class="row">
                    <div class="pedidos col d-block d-md-flex flex-wrap align-items-center justify-content-around m-2 p-2 gap-2">
                        <div class="pedido col-12 d-flex justify-content-around">
                            <div class="row">
                                <div class="col-12 ">
                                    <p>
                                        #{{index + 1}}
                                    </p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        Estado: {{ pedido.estado }}
                                    </p>
                                </div>
                            </div>
                            <div class="row s">
                                <div class="col-12">
                                    <p>
                                        Fecha de solicitud: {{ pedido.created_at.split("T")[0] }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        Fecha de entrega: {{ pedido.fecha_entrega }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <p>
                                        Precio: {{ pedido.precio}} €
                                    </p>
                                </div>

                            </div>
                        </div>
                        <hr class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<style scoped>
.historial {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8rem 0;
    min-height: 100vh;
}

.historiales {
    border-radius: 5px;
    color: #D98032;
    border: 3px solid #D98032;
    box-shadow: 0px 0px 30px #A65221;
}

select{
    background-color: #D98032;
    border: 2px solid #A65221;
    cursor: pointer;
    font-weight: 500;
}
</style>