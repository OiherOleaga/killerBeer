<!-- HeaderPartial.vue -->
<script>
import { Collapse, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Collapse, Ripple });
</script>

<template>
<footer class="text-center">
  <div class="text-center p-3">
    © 2023 Todos los derechos estám reservados a
    <a class="text-body" href="/">KillerBeer.com</a>
  </div>
</footer>
</template>

<style scoped>
footer{
    background-color: #D98032 ;
    color:  #212226;
    font-size: 18px;
    font-weight: 500;
}
</style>
  