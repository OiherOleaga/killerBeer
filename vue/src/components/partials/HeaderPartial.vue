<!-- HeaderPartial.vue -->
<script setup>
import { Collapse, Ripple, initMDB } from "mdb-ui-kit";
import { defineProps } from "vue";
const props = defineProps({
    carritoCount: Number
})
initMDB({ Collapse, Ripple });
</script>

<template>
    <header class="fixed-top">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid m-0 p-0 d-flex align-items-center">
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
                            <ul class="tb-megamenu-nav nav level-1 items-6">
                                <li class="nav-item dropdown px-2">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        CUENTA
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/historial">Mis pedidos</a></li>
                                    </ul>
                                </li>
                                <li class="tb-megamenu-item level-2 mega px-2">
                                    <a href="/beer">Bebidas</a>
                                </li>
                                <li class="tb-megamenu-item level-3 mega px-2">
                                    <a href="/about">Sobre Nosotros</a>
                                </li>
                                <li class="tb-megamenu-item level-4 mega px-2">
                                    <a href="/pedido"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-cart2" viewBox="0 2 16 16">
                                            <path
                                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                        </svg>{{ props.carritoCount != 0 ? props.carritoCount : "" }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="collapse" id="navbarSupportedContent">
            <div class="bg-dark p-4">
                <ul class="tb d-block-megamenu-nav nav level-0 items-6">
                    <li class="tb-megamenu-item level-2 mega px-2">
                        <a href="/pedido">Cesta</a>
                    </li>
                    <li class="tb-megamenu-item level-1 mega px-2">
                        <a href="/beer">Bebidas</a>
                    </li>
                    <li class="tb-megamenu-item level-2 mega px-2">
                        <a href="/about">Sobre Nosotros</a>
                    </li>
                    <li class="tb-megamenu-item level-2 mega px-2">
                        <a href="/historial">Mis pedidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</template>

<style scoped>
header {
    z-index: 500;
    font-size: 20px;
    padding: 0 1rem;
    background: rgba(8, 8, 8, 0.70);
    transition: background .3s ease-in-out;
}

@media all and (min-width: 992px) {
    .nav-item:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu,
    .dropdown-item {
        padding: .4rem;
        background-color: #212226;
    }

    .dropdown-item {
        margin: .3rem 0;
    }
}

.nav-link {
    color: #D98032;
}

header:hover {
    background: rgba(8, 8, 8, 1);
}

form {
    height: 30px;
}

form input {
    background-color: #212226;
    border: 0;
    color: #D98032;
    padding: .5rem;
}

form input:focus {
    background-color: #212226;
    color: #D98032;
    border: none;
}

form input::placeholder {
    text-align: start;
}

.navbar-brand img {
    height: 40px;
    margin: 0 1rem 0 0;
    width: auto
}

a,
input::placeholder {
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 600;
    background-color: transparent;
    color: #D98032;
}

ul a {
    box-shadow: inset 0 0 0 0 #D98032;
    margin: 0 -.25rem;
    padding: 0 .25rem;
    border-radius: 5px;
    transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
}

ul a:hover {
    box-shadow: inset 300px 0 0 0 #D98032;
    color: #212226;
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
  