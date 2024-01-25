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
  fetch(route("/login"), {
    method: "POST",
    headers: { "Content-type": "plain/text" },
    body: codigo.value
  })
    .then((res) => {
      return res.json();
    })
    .then((res) => {
      if (res.status == "OK") {
        localStorage.setItem("sessionId", res.sessionId);
        router.push("/");
      } else {
        error.value = "codigo no valido";
      }
    })
    .catch((error) => {
      alert("ocurrio un error en el login");
      console.log(error);
    })
}
</script>



<template>
  <div class="container-fluid d-flex flex-row bg-gradient-custom">
    <div class="p-5">
      <div class="mb-3 d-flex flex-column">
        <label for="Codigo" class="form-label">Codigo</label>
        <input type="password" class="form-control" id="Codigo" v-model="codigo">
      </div>
      <button class="btn btn-primary" @click="entrar">Iniciar sesion</button>
      <div class="error">
        <p v-if="error">{{ error }}</p>
      </div>

    </div>
  </div>
</template>

<style scoped>
.bg-gradient-custom {
  background: linear-gradient(45deg, #A65221, #D98032);
  height: 100vh;

}

.btn {
  background-color: #F2A74B;
  color: #212226;
  border: none;
  box-shadow: 0px 0px 4px #D98032;
}

.form-label {
  color: black;
}

.p-5 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  border-radius: 20px;
  padding: 20px;
  text-align: center;
  box-shadow: 0px 0px 60px #A65221;
  box-shadow: inset 0px 0px 20px #F2CC85;
}

p {
  color: #A65221;
  margin-top: 20px;
  font-size: 1.1em;

}
</style>
