<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { ref } from "vue";

const codigo = ref("");

function entrar() {
  fetch(route("/login"), {
    method: "POST",
    headers: { "Content-type": "plain/text" },
    body: codigo.value
  })
    .then((res) => {
      return res.text()
    })
    .then((res) => {
      if (res == "OK") {
        console.log("logeado")
      }
    })
    .catch((error) => {
      console.log(error);
    })
}
</script>



<template>
  <div class="container-fluid d-flex flex-row bg-gradient-custom">
    <form class="p-5">
      <div class="mb-3 d-flex flex-column">
        <label for="Codigo" class="form-label">Codigo</label>
        <input type="password" class="form-control" id="Codigo">
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sesion</button>
    </form>
  </div>
</template>

<style scoped>
.bg-gradient-custom {
  background: linear-gradient(45deg, #F2A74B, #D98032);
  height: 100vh;

}

.form-label {
  color: black;
}

form {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  border-radius: 20px;
  padding: 20px;
  text-align: center;
  box-shadow: 0px 0px 60px #A65221;
}
</style>
