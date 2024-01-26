<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { watch } from 'vue';
import { ref } from "vue";
import router from '@/router';

const correo = ref("");
const direccion = ref("");
const telefono = ref("");
const nombre = ref("");
const error = ref("");

function registrar() {

    const datos = {
        correo: correo.value,
        direccion: direccion.value,
        telefono: telefono.value,
        nombre: nombre.value
    };


    fetch(route("/register"), {
        method: "POST",
        headers: { "Content-type": "application/json" },
        body: JSON.stringify(datos)
    })
        .then((res) => {
            return res.text();
        })
        .then((res) => {
            if (res == "OK") {
                console.log(res.sessionId);
                localStorage.setItem("sessionId", res.sessionId);
                router.push("/");
            } else {
                error.value = "Los datos no son validos";
            }
        })
        .catch((error) => {
            alert("ocurrio un error en el registro");
            console.log(error);
        })
}
function enviarLogin() {
    router.push("/login");
}
</script>

<template>
    <div class="container-fluid py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="../components/img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png"
                                        style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Bienvenido a KillerBeer</h4>
                                </div>
                                <form>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Correo</label>
                                        <input type="email" id="email" class="form-control" v-model="correo"
                                            placeholder="Correo electronico" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="direction">Direccion</label>
                                        <input type="text" id="direction" class="form-control"
                                            placeholder="Calle ejemplo, numero Ejemplo, Ciudad ejemplo"
                                            v-model="direccion" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="telefono">Telefono</label>
                                        <input type="text" id="telefono" class="form-control"
                                            placeholder="Numero de contacto" v-model="telefono" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Nombre</label>
                                        <input type="text" id="name" class="form-control" v-model="nombre" />

                                    </div>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button"
                                            @click="registrar">Crear Cuenta</button>
                                    </div>
                                    <p v-if="error" class="error">{{ error }}</p>
                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                                        <button type="button" class="btn btn-outline-danger" @click="enviarLogin">Iniciar
                                            sesion</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">¡Bienvenido a KillerBeer!</h4>
                                <p class="small mb-0">En KillerBeer, nos dedicamos a ofrecer una experiencia
                                    cervecera
                                    única y emocionante. Nuestro compromiso es crear cervezas extraordinarias que
                                    despierten los sentidos y desafíen los límites del sabor. Cada sorbo de
                                    KillerBeer
                                    es una explosión de innovación y calidad, elaborada con los mejores ingredientes
                                    y
                                    la maestría artesanal que nos distingue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
<style scoped>
input,
input:focus {
    color: #D98032;
}

.container-fluid {
    background-color: #212226;
    min-height: 100vh;
}

.gradient-custom-2 {
    background: -webkit-linear-gradient(to right, #F2CC85, #F2A74B, #D98032, #A65221);
    background: linear-gradient(to right, #F2CC85, #F2A74B, #D98032, #A65221);
}


@media (min-width: 768px) {
    .gradient-form {
        height: 100vh !important;
    }
}

@media (min-width: 769px) {
    .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
    }
}

.card {
    border: none;
}

.btn {
    border: 1px solid #212226;
}
</style>
  