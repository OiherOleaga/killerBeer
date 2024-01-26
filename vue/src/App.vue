<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Header from './components/partials/HeaderPartial.vue';
import Footer from './components/partials/FooterPartial.vue';

import router from './router';

let sessionId = localStorage.getItem("sessionId");

if (!sessionId) {
  router.push("/login");
} else {
  fetch(route("/session"), {
    method: "post",
    headers: { "Content-type": "application/json" },
    body: JSON.stringify({ sessionId: sessionId })
  })
    .then((res) => {
      return res.text();
    })
    .then(res => {
      console.log(res)
      if (res != "OK") {
        router.push("/login");
      }
    })
}
</script>

<template>
  <Header v-if="!['login', 'register'].includes($route.name)"></Header>
  <main>
    <RouterView />
  </main>
  <Footer v-if="!['login', 'register'].includes($route.name)"></Footer>
</template>

<style scoped></style>
