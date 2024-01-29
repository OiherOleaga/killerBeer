<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Header from './components/partials/HeaderPartial.vue';
import Footer from './components/partials/FooterPartial.vue';

import router from './router';

</script>

<template>
  <Header v-if="!['login', 'register'].includes($route.name)"></Header>
  <main>
    <RouterView />
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
