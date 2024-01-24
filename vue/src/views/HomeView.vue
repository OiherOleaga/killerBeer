<script setup>
import HeaderPartial from '../components/partials/HeaderPartial.vue';


function deferVideo() {
  //defer html5 video loading
  $("video source").each(function () {
    var sourceFile = $(this).attr("data-src");
    $(this).attr("src", sourceFile);
    var video = this.parentElement;
    video.load();
    // uncomment if video is not autoplay
    //video.play();
  });

}
window.onload = deferVideo;
</script>

<template>
  <HeaderPartial />
  <main class="">
    <div class="jumbotron jumbotron-fluid">
      <video autoplay muted loop>
        <source src="../assets/videos/x2mate.com-EPIC BEER COMMERCIAL B-ROLL AT HOME 2022-(1080p).mp4" type="video/mp4">
      </video>
    </div>
  </main>
</template>

<style scoped>
.jumbotron {
  position: relative;
  height: 700px;
  overflow: hidden;
  background-color: black;
}

.jumbotron video {
  position: absolute;
  z-index: 1;
  top: 0;
  width: 100%;
  height: 100%;
  /*  object-fit is not supported on IE  */
  object-fit: cover;
  opacity: 0.5;
}
</style>
