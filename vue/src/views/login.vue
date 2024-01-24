<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { ref } from "vue";

const codigo = ref("");

function entrar() {
  fetch(route("/login"), {
    method: "POST",
    headers: {"Content-type": "plain/text"},
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
  <label for="codigo">Codigo:</label>
  <input type="passwrod" id="codigo" v-model="codigo">
  <button @click="entrar">Entrar</button>
  
</template>

<style scoped>
</style>
