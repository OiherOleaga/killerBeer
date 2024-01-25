<script setup>
import HeaderPartial from '../components/partials/HeaderPartial.vue';

</script>

<template>
  <section class="home overflow-hidden">
    <div class="container-fluid m-0 p-0">
      <div class="jumbotron">
        <video id="video-background" preload muted autoplay loop>
          <source src="../assets/videos/x2mate.com-EPIC BEER COMMERCIAL B-ROLL AT HOME 2022-(1080p).mp4" type="video/mp4">
        </video>
        <div class="container text-center">
          <h1 class="display-1">DESCUBRE NUESTRAS CERVEZAS</h1>
          <p class="display-6">
            <cite title="Source Title"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-quote" viewBox="0 0 16 16">
                <path
                  d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
              </svg>Forjada en un gran sabor, elaborada solo para valientes<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote"
                viewBox="0 0 16 16">
                <path
                  d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
              </svg></cite>
          </p>
          <a href="/beers"><span class="btn btn-lg">CATÁLOGO</span></a>
        </div>
      </div>
      <section class="beers mb-4">
        <h1 class="text-center display-3 ">DESTACADAS</h1>
        <section class="d-flex flex-wrap justify-content-center align-items-center gap-5 text-center">
          <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
            <img src="../components/img/beers/Leonardo_Diffusion_XL_crea_una_lata_de_cerveza_llamada_KillerB_0 (1).jpg"
              class="card-img-top" alt="green iguana" />
            <div class="card-body">
              <h4>Lizard <span class="badge bg-danger">Nueva</span></h4>
              <p class="card-text">
                Lizards are a widespread group of squamate reptiles, with over
                6,000 species, ranging across all continents except Antarctica.
              </p>
              <hr class="hr">
              <div class="botones d-flex gap-2 justify-content-center">
                <button class="btn btn-sm" type="button">Comprar</button>
              </div>
            </div>
          </div>
          <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
            <img src="../components/img/beers/Leonardo_Diffusion_XL_crea_una_lata_de_cerveza_llamada_KillerB_0 (2).jpg"
              class="card-img-top" alt="green iguana" />
            <div class="card-body">
              <h4>Lizard</h4>
              <p class="card-text">
                Lizards are a widespread group of squamate reptiles, with over
                6,000 species, ranging across all continents except Antarctica.
              </p>
              <hr class="hr">
              <div class="botones d-flex gap-2 justify-content-center">
                <button class="btn" type="button">Comprar</button>
              </div>
            </div>
          </div>
          <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
            <img src="../components/img/beers/Leonardo_Diffusion_XL_crea_una_lata_de_cerveza_llamada_KillerB_0.jpg"
              class="card-img-top" alt="green iguana" />
            <div class="card-body">
              <h4>Lizard</h4>
              <p class="card-text">
                Lizards are a widespread group of squamate reptiles, with over
                6,000 species, ranging across all continents except Antarctica.
              </p>
              <hr class="hr">
              <div class="botones d-flex gap-2 justify-content-center">
                <button class="btn" type="button">Comprar</button>
              </div>
            </div>
          </div>
          <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
            <img src="../components/img/beers/Leonardo_Diffusion_XL_crea_una_lata_de_cerveza_llamada_KillerB_1 (2).jpg"
              class="card-img-top" alt="green iguana" />
            <div class="card-body">
              <h4>Lizard <span class="badge bg-danger">Nueva</span></h4>
              <p class="card-text">
                Lizards are a widespread group of squamate reptiles, with over
                6,000 species, ranging across all continents except Antarctica.
              </p>
              <hr class="hr">
              <div class="botones d-flex gap-2 justify-content-center">
                <button class="btn" type="button">Comprar</button>
              </div>
            </div>
          </div>
          <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
            <img src="../components/img/beers/Leonardo_Diffusion_XL_crea_una_lata_de_cerveza_llamada_KillerB_1 (1).jpg"
              class="card-img-top" alt="green iguana" />
            <div class="card-body">
              <h4>Lizard</h4>
              <p class="card-text">
                Lizards are a widespread group of squamate reptiles, with over
                6,000 species, ranging across all continents except Antarctica.
              </p>
              <hr class="hr">
              <div class="botones d-flex gap-2 justify-content-center">
                <button class="btn" type="button">Comprar</button>
              </div>
            </div>
          </div>
          <div class="card col-10 col-lg-3 d-flex justify-content-center align-items-center">
            <img src="../components/img/beers/Leonardo_Diffusion_XL_crea_una_lata_de_cerveza_llamada_KillerB_2.jpg"
              class="card-img-top" alt="green iguana" />
            <div class="card-body">
              <h4>Lizard <span class="badge bg-danger">Nueva</span></h4>
              <p class="card-text">
                Lizards are a widespread group of squamate reptiles, with over
                6,000 species, ranging across all continents except Antarctica.
              </p>
              <hr class="hr">
              <div class="botones d-flex gap-2 justify-content-center">
                <button class="btn" type="button">Comprar</button>
              </div>
            </div>
          </div>
        </section>
      </section>
    </div>
  </section>
</template>

<style scoped>
.home {
  background-color: #212226;
}

.jumbotron,
.beers,
h1 {
  color: #A65221;
  font-weight: 500;
}

.jumbotron p {
  font-weight: 400;
}

.jumbotron {
  position: relative;
  overflow: hidden;
  height: 100vh;
  background-color: black;
}

.card {
  background-color: transparent;
  color: #D98032;
  gap: 10px;
  border: 3px solid #D98032;
  box-shadow: 0px 0px 30px #A65221;
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
  opacity: .3;
}

.btn {
  cursor: pointer;
  position: relative;
  padding: 10px 20px;
  background: #A65221;
  font-size: 20px;
  font-weight: 700;
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
