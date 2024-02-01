<script setup>
//GET("/session");
import { ref } from "vue";
import router from '@/router';

const objeto = ref(null);

GET("/cervezasMain").then(res => {
  objeto.value = res.productos
})


function enviarCervezas() {
  router.push("/Beer");

}
</script>

<template>
  <section class="home overflow-hidden">
    <div class="container-fluid m-0 p-0">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <video id="video-background" preload muted autoplay loop>
              <source src="../assets/videos/x2mate.com-EPIC BEER COMMERCIAL B-ROLL AT HOME 2022-(1080p).mp4"
                type="video/mp4">
            </video>
            <div class="container text-center">
              <h1 class="display-1">DESCUBRE NUESTRAS CERVEZAS</h1>
              <p class="display-6">
                <cite title="Source Title"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                    <path
                      d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                  </svg>Forjada en un gran sabor, elaborada solo para valientes<svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                    <path
                      d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                  </svg></cite>
              </p>
              <a href="/beer"><span class="btn btn-lg">CATÁLOGO</span></a>
            </div>
          </div>
          <div class="gallery-item d-none d-xl-block">
            <img src="../components/img/36792unnamed-2.jpg" class="img-fluid" alt="Gallery Item 1">
            <div class="overlay">
              <p>
                En nuestras innovadoras fábricas de cerveza, donde el arte de destilar se encuentra con la
                pasión por la perfección. Nuestro proceso de destilación es un ballet de precisión y maestría, donde cada
                nota aromática y cada matiz de sabor se cuidan con esmero para crear una experiencia cervecera
                inigualable.
              </p>
              Nuestro viaje comienza con los ingredientes cuidadosamente seleccionados, desde las maltas más finas hasta
              los lúpulos más aromáticos. Estos elementos de calidad se combinan en una danza armoniosa en nuestros
              enormes tanques de maceración, donde la magia comienza a tomar forma. El maestro cervecero, con su
              experiencia única, guía este proceso para extraer los sabores más ricos y complejos.
              <p>
                Después de la fermentación, llega el momento crucial de la destilación. En nuestros alambiques de última
                generación, el líquido resultante se somete a un delicado proceso de destilación que eleva la cerveza a
                nuevas alturas. Este paso fundamental destila la esencia de cada ingrediente, purificando y refinando la
                mezcla hasta alcanzar su máxima expresión.
              </p>
              Nuestros destiladores expertos ajustan cuidadosamente los parámetros, capturando los matices que hacen que
              cada cerveza sea única. Los alambiques, relucientes y majestuosos, destilan la pasión y el arte que
              nuestros maestros cerveceros han vertido en cada lote.
              <p>
                Finalmente, el resultado es una cerveza destilada de calidad incomparable, donde los sabores se entrelazan
                en una sinfonía de notas complejas y armoniosas. Cada sorbo es una experiencia sensorial que deleita los
                sentidos y refleja el compromiso inquebrantable con la excelencia de nuestras fábricas de cerveza.
              </p>
              <p>
                En nuestras instalaciones, la destilación de la cerveza es más que un proceso; es una expresión artística
                que busca cautivar a los amantes de la cerveza con cada gota. Descubre la magia detrás de nuestras
                cervezas destiladas y sumérgete en la perfección de la destilación cervecera en cada sorbo.
                <br>
              <h1>¡Salud a la innovación, al arte y a la cerveza excepcional!</h1>
              </p>
            </div>
          </div>
          <section class="beers pb-3">
            <h1 class="display-2 text-center">DESTACADAS</h1>
            <section class="d-flex flex-wrap justify-content-center align-items-center gap-5 text-center py-3">
              <div v-for="(producto, index) in objeto" :key="index"
                class="card col-10 col-lg-3 d-flex justify-content-center align-items-center"
                style="width: 350px; height: 730px; overflow: hidden;">

                <div class="img" style="width: 400px; height: 400px; padding-top: 390px; position: relative;">
                  <img :src="producto.foto" class="card-img-top" :alt="producto.nombre"
                    style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" />
                </div>

                <div class="gradient-overlay"></div>
                <div class="card-body"
                  style="max-height: 400px; box-sizing: border-box; display: flex; flex-direction: column; overflow: hidden; align-items: center; justify-content: center;">
                  <h4 class="nombre pb-3">{{ producto.nombre }}</h4>
                  <p class="card-text d-flex justify-content-center align-items-center h-100">
                    {{ producto.descripcion }}
                  </p>
                  <div class="botones d-flex gap-2 justify-content-center mt-auto pt-3">
                    <button class="btn btn-sm" type="button" @click="enviarCervezas">Comprar</button>
                  </div>
                </div>
              </div>
            </section>
          </section>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.gradient-overlay {
  position: absolute;
  bottom: 1;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, rgba(255, 255, 255, 0)60%, rgb(255, 255, 255, .3));
  pointer-events: none;
}

.jumbotron p,
h1 {
  font-weight: 600;
  transform: rotate(-.6deg);
  font-style: italic;
}

.beers h1 {
  color: #D98032;
  transform: rotate(0deg);
  text-decoration: underline;
  text-shadow: 0px 0px 10px#A65221;
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
  border: 3px solid #D98032;
  box-shadow: 0px 0px 30px #A65221;
}

.botones {
  width: 100%;
  border-top: 1px solid #d9803268;
}

.nombre {
  width: 100%;
  border-bottom: 1px solid #d9803268;
}

.beers {
  background: linear-gradient(rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, .7)) 100%, url(../components/img/hermosa-foto-campo-afilar-cielo-nublado.jpg);
  background-size: cover;
  background-position: bottom;
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

.gallery-item {
  position: relative;
  overflow: hidden;
  height: 100vh;
  background-color: black;
}

.gallery-item img {
  opacity: .8;
  transition: transform 0.3s ease-in-out;
}

.gallery-item:hover img {
  transform: scale(1.2);
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, .7);
  font-weight: 600;
  font-size: 150%;
  color: #D98032;
  padding: 0 5%;
  display: flex;
  text-align: justify;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.overlay h1 {
  transform: rotate(0deg);
}

.gallery-item:hover .overlay {
  opacity: 1;
}
</style>
