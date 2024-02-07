<script setup>

</script>

<template>
  <section class="about">
    <section>
      <div class="container px-5 tp-1">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5"><img class="img1 img-fluid rounded-circle" src="../components/img/beers/tradicional.jpg"
                alt="..." /></div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5 texto">
              <h2 class="display-4">Nuestra historia</h2>
              <hr>
              <p>En 1974, nace KillerBeer, una marca de cervezas artesanales en España. Desde su inicio en un taller
                cervecero, se distingue por su calidad y sabor excepcional. KillerBeer se convierte en un símbolo de
                celebración y tradición en toda España. Su compromiso con la artesanía cervecera y los ingredientes de
                alta
                calidad la destacan en el mercado.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6">
            <div class="p-5"><img class="img-fluid rounded-circle" src="../components/img/beers/sucursal.jpg" alt="..." />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5 texto">
              <h2 class="display-4">Nuestras Sucursales</h2>
              <hr>
              <p>Las sucursales de KillerBeer se extienden por todo el mundo, desde las calles empedradas de Madrid hasta
                los bulliciosos distritos de Nueva York. Cada sucursal es un oasis cervecero donde los amantes de la
                cerveza
                pueden deleitarse con una amplia variedad de estilos y sabores. Desde sus pubs acogedores en Londres hasta
                sus modernas cervecerías en Tokio, KillerBeer ofrece experiencias únicas que celebran la diversidad y la
                riqueza de la cultura cervecera mundial.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5"><img class=" img3 img-fluid rounded-circle" src="../components/img/beers/fabrica.jpg"
                alt="..." /></div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5 texto mb-4">
              <h2 class="display-4">Nuestros empleados</h2>
              <hr>
              <p>Los trabajadores de KillerBeer son el corazón y el alma de la empresa, dedicados a perfeccionar el arte
                de
                la cerveza con pasión y compromiso. Desde los maestros cerveceros que elaboran las recetas hasta los
                camareros que sirven con una sonrisa, cada empleado comparte un amor profundo por la cerveza y un deseo de
                ofrecer experiencias inolvidables.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</template>

<style>
.display-4 {
  color: #D98032;
  text-align: center;
}

p {
  color: #F2A74B;
  text-align: center;
}

.gx-5 {

  margin-top: 3em;
}

.img1 {
  margin-top: 3em;
}

.img-fluid {
  border: 1px solid #F2A74B;
  box-shadow: 0px 0px 20px #F2A74B;
}

hr {
  color: #F2A74B;
  box-shadow: 0px 0px 5px #F2A74B;
}

.img3 {
  margin-bottom: 3em;
}

.texto {
  border: 1px solid #F2A74B;

  box-shadow: inset 0px 0px 15px #F2A74B, 0px 0px 15px #D98032;
  border-radius: 10px;
}
</style>
