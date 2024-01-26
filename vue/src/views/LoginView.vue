<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { watch } from 'vue';
import { ref } from "vue";
import router from '@/router';

const codigo = ref("");
const error = ref("");

watch(codigo, () => {
  error.value = "";
})

function entrar() {
  const data = { codigo: codigo.value };

  fetch(route("/login"), {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data)
  })
    .then((res) => {
      return res.json();
    })
    .then((res) => {
      if (res.status == "OK") {
        localStorage.setItem("sessionId", res.sessionId);
        router.push("/");
      } else {
        error.value = "Código no válido";
      }
    })
    .catch((error) => {
      alert("Ocurrió un error en el login");
      console.log(error);
    });
}
function enviarRegistro() {
  router.push("/register");
}
</script>

<template>
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100 cont">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img
                      src="../components/img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Bienvenido a KillerBeer</h4>
                  </div>

                  <div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="codigo">Codigo</label>
                      <input type="password" id="codigo" class="form-control" placeholder="Codigo de usuario"
                        v-model="codigo" />

                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" @click="entrar" type="
                        button">Iniciar
                        sesion</button>
                    </div>
                    <p v-if="error" class="error">{{ error }}</p>
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                      <button type="button" class="btn btn-outline-danger" @click="enviarRegistro">Crear una
                        nueva</button>
                    </div>

                  </div>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">¡Bienvenido de nuevo!</h4>
                  <p class="small mb-0">¿Eres un amante de la cerveza que busca experiencias únicas y una
                    amplia variedad de opciones para satisfacer tu paladar? ¡Entonces estás en el lugar
                    correcto! En BeerHaven, no solo vendemos cervezas, creamos un paraíso cervecero para
                    los apasionados de esta bebida tan especial.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>


<style scoped>
input,
input:focus {
  color: #D98032;
}

section {
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

.error {
  color: rgb(250, 61, 61);
  text-align: center;
  font-size: 1.2em;
}
</style>