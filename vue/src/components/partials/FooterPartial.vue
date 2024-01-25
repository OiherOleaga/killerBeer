<!-- HeaderPartial.vue -->
<script>
import { Collapse, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Collapse, Ripple });
</script>

<template>
<footer class="text-center">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-body" href="/">KillerBeer.com</a>
  </div>
  <!-- Copyright -->
</footer>
</template>

<style scoped>
footer{
    background-color: #D98032 ;
    color:  #212226;
}
</style>
  