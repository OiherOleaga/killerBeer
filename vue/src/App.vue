<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HeaderPartial from './components/partials/HeaderPartial.vue';
import router from './router';


/*
fetch(route("/session"), {
  method: "post",
  headers: { "Content-type": "application/json" },
  body: JSON.stringify({sessionId: sessionId})
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
*/

</script>

<template>
  <main>
    <RouterView />
  </main>
  
</template>

<style scoped>

</style>
