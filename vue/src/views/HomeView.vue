<script setup>
import HeaderPartial from '../components/partials/HeaderPartial.vue';

</script>

<template>
  <HeaderPartial />
  <section class="home overflow-hidden">
    <div class="container-fluid m-0 p-0">
      <div class="jumbotron">
        <video id="video-background" preload muted autoplay loop>
          <source src="../assets/videos/x2mate.com-EPIC BEER COMMERCIAL B-ROLL AT HOME 2022-(1080p).mp4" type="video/mp4">
        </video>
        <div class="container">
          <h1 class="h1">DESCUBRE NUESTRAS CERVEZAS</h1>
          <p class="">
            Forged in Flavor, Brewed for the Brave – <cite title="Source Title">Unleash the Bold Taste!</cite>
          </p>
          <a href="/beers"><span class="btn btn-lg">CATÁLOGO</span></a>
        </div>
      </div>
      <h1 class="text-center display-3 ">DESTACADAS</h1>
      <section class="cartas d-flex flex-wrap justify-content-center gap-5 p-2">
        <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
          <img src="https://www.stonebrewing.com/sites/default/files/styles/trimmed_whitespace/public/2023-06/2023_del_can.png"
            class="card-img-top" alt="green iguana"/>
          <div class="card-body">
            <h4>Lizard <span class="badge bg-danger">Nueva</span></h4>
            <p class="card-text">
              Lizards are a widespread group of squamate reptiles, with over
              6,000 species, ranging across all continents except Antarctica.
            </p>
            <div class="botones d-flex gap-2">
              <button class="btn btn-sm" type="button">Comprar</button>
            </div>
          </div>
        </div>
        <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
          <img src="https://www.stonebrewing.com/sites/default/files/styles/trimmed_whitespace/public/2023-06/2023_del_can.png"
            class="card-img-top" alt="green iguana"/>
          <div class="card-body">
            <h4>Lizard</h4>
            <p class="card-text">
              Lizards are a widespread group of squamate reptiles, with over
              6,000 species, ranging across all continents except Antarctica.
            </p>
            <div class="botones d-flex gap-2">
              <button class="btn" type="button">Comprar</button>
            </div>
          </div>
        </div>
        <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
          <img src="https://www.stonebrewing.com/sites/default/files/styles/trimmed_whitespace/public/2023-06/2023_del_can.png"
            class="card-img-top" alt="green iguana"/>
          <div class="card-body">
            <h4>Lizard</h4>
            <p class="card-text">
              Lizards are a widespread group of squamate reptiles, with over
              6,000 species, ranging across all continents except Antarctica.
            </p>
            <div class="botones d-flex gap-2">
              <button class="btn" type="button">Comprar</button>
            </div>
          </div>
        </div>
        <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
          <img src="https://www.stonebrewing.com/sites/default/files/styles/trimmed_whitespace/public/2023-06/2023_del_can.png"
            class="card-img-top" alt="green iguana"/>
          <div class="card-body">
            <h4>Lizard <span class="badge bg-danger">Nueva</span></h4>
            <p class="card-text">
              Lizards are a widespread group of squamate reptiles, with over
              6,000 species, ranging across all continents except Antarctica.
            </p>
            <div class="botones d-flex gap-2">
              <button class="btn" type="button">Comprar</button>
            </div>
          </div>
        </div>
        <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
          <img src="https://www.stonebrewing.com/sites/default/files/styles/trimmed_whitespace/public/2023-06/2023_del_can.png"
            class="card-img-top" alt="green iguana"/>
          <div class="card-body">
            <h4>Lizard</h4>
            <p class="card-text">
              Lizards are a widespread group of squamate reptiles, with over
              6,000 species, ranging across all continents except Antarctica.
            </p>
            <div class="botones d-flex gap-2">
              <button class="btn" type="button">Comprar</button>
            </div>
          </div>
        </div>
        <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
          <img src="https://www.stonebrewing.com/sites/default/files/styles/trimmed_whitespace/public/2023-06/2023_del_can.png"
            class="card-img-top" alt="green iguana"/>
          <div class="card-body">
            <h4>Lizard <span class="badge bg-danger">Nueva</span></h4>
            <p class="card-text">
              Lizards are a widespread group of squamate reptiles, with over
              6,000 species, ranging across all continents except Antarctica.
            </p>
            <div class="botones d-flex gap-2">
              <button class="btn" type="button">Comprar</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
</template>

<style scoped>
.home {
  background-color: #212226;
}

h1 {
  color: #A65221;
}

.jumbotron {
  position: relative;
  overflow: hidden;
  height: 100vh;
  background-color: black;
}

.card {
  background-color: #212226;
  color: #D98032;
  gap: 10px;
}

.card img{
  width: 190px;
}

.container {
  position: relative;
  display: flex;
  gap: 20px;
  flex-direction: column;
  align-items: center;
  height: 100%;
  justify-content: center;
  color: #A65221;
  font-weight: 900;
  z-index: 2;
}

.container p {
  background-color: rgba(0, 0, 0, .2);
}

#video-background {
  position: absolute;
  height: auto;
  width: auto;
  min-height: 100%;
  min-width: 100%;
  left: 50%;
  top: 50%;
  transform: translate3d(-50%, -50%, 0);
  z-index: 1;
  opacity: .5;
}

.btn {
  cursor: pointer;
  position: relative;
  padding: 10px 20px;
  background: #A65221;
  font-size: 20px;
  font-weight: 500;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  transition: all .5s;

  &:after,
  &:before {
    content: " ";
    width: 10px;
    height: 10px;
    position: absolute;
    border: 0px solid #A65221;
    transition: all .5s;
  }

  &:after {
    top: -1px;
    left: -1px;
    border-top: 5px solid black;
    border-left: 5px solid black;
  }

  &:before {
    bottom: -1px;
    right: -1px;
    border-bottom: 5px solid black;
    border-right: 5px solid black;
  }

  &:hover {
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    background: rgba(0, 0, 0, .5);
    color: #A65221;

    &:before,
    &:after {
      width: 100%;
      height: 52px;
      border-color: #A65221;
    }
  }
}
</style>
