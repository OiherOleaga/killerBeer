<!-- HeaderPartial.vue -->
<script>
import { Collapse, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Collapse, Ripple });
</script>

<template>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid m-0 p-0 d-flex">
                <div class="region region-nav-branding">
                    <div class="navbar-brand d-flex align-items-center">
                        <a href="/" class="site-logo d-block">
                            <img src="../img/Leonardo_Diffusion_XL_dibuja_un_logo_para_una_empresa_de_cerve_2__2_-ai-brush-removebg-2vzply9.png"
                                alt="logo">
                        </a>
                        <div>
                            <a href="/">
                                Killer Beer
                            </a>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-end">
                    <div class="region region-nav-main">
                        <div class="block block-tb-megamenu block-tb-megamenu-menu-blockmain">
                            <ul class="tb-megamenu-nav nav level-0 items-6">
                                <li class="tb-megamenu-item level-1 mega px-2">
                                    <a href="/beer">Nuestras Cervezas</a>
                                </li>
                                <li class="tb-megamenu-item level-2 mega px-2">
                                    <a href="/about">Sobre Nosotros</a>
                                </li>
                                <li class="tb-megamenu-item level-4 mega px-2">
                                    <form class="d-flex justify-content-center align-items-center">
                                        <input class="form-control me-2 " type="search" placeholder="Buscar"
                                            aria-label="Search">
                                    </form>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </nav>

    </header>
</template>

<style scoped>
header {
    position: fixed;
    top: 0;
    z-index: 500;
    width: 100%;
    background: rgba(8, 8, 8, 0.75);
    transition: background .3s ease-in-out;
}

header:hover{
    background: rgba(8, 8, 8, 1);
}

form{
    height: 25px;
}

form input{
    background-color: #212226;
    border: 0;
    color: #D98032;
    padding: .5rem;
}

form input:focus{
    background-color: #212226;
    color: #D98032;
    border: none;
}

form input::placeholder{
    text-align: start;
}

.navbar-brand img {
    height: 40px;
    margin: 0 1rem 0 0;
    width: auto
}

a, input::placeholder {
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 600;
    background-color: transparent;
    color: #D98032;
}

button {
    border: 0;
}

@media (max-width: 991.98px) {
    .navbar-toggler span:not(:last-child) {
        margin-bottom: 5px;
    }
}

@media (max-width: 991.98px) {
    .navbar-toggler span {
        display: block;
        position: relative;
        width: 25px;
        height: 2px;
        background: #D98032;
        opacity: 1;
        transition: all 0.25s;
    }
}

@media (min-width: 992px) {
    .navbar-brand img {
        height: 90px;
    }
}
</style>
  