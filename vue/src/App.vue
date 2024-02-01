<script setup>
import { RouterLink, RouterView } from 'vue-router'
import { ref } from 'vue';;
import Header from './components/partials/HeaderPartial.vue';
import Footer from './components/partials/FooterPartial.vue';

import router from './router';

const carritoCount = ref((JSON.parse(localStorage.getItem("pedido")) ?? []).length);
function changeCarrito(num) {
  carritoCount.value = num;
}
</script>

<template>
  <Header v-if="!['login', 'register'].includes($route.name)" :carritoCount="carritoCount"></Header>
  <main>
    <RouterView @changeCarrito="changeCarrito"/>
  </main>
  <Footer v-if="!['login', 'register'].includes($route.name)"></Footer>
</template>

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
</style>
