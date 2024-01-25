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
    headers: {"Content-type": "plain/text"},
    body: codigo.value
  })
    .then((res) => {
        return res.text();
    })
    .then((res) => {
        if (res == "OK") {
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
  <label for="codigo">Codigo:</label>
  <input type="passwrod" id="codigo" v-model="codigo">
  <button @click="entrar">Entrar</button>
  <p v-if="error">{{ error }}</p>
</template>

<style scoped>
</style>
