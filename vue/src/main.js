import 'bootstrap/dist/css/bootstrap.min.css';

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

function route(uri) {
    return `http://localhost/api${uri}`
}

async function GET(uri) {

    try {
        res = await (await fetch(route(uri), {
            method: "GET",
            credentials: "include",
        })).json();

        if (!res.logged) {
            window.location.pathname = "/login";
        }

        return res;
    } catch (error) {
        alert("Error en " + uri + "GET");
        console.log(error)
    }
}

async function POST(uri, json) {

    if (typeof json !== "string")  {
        json = JSON.stringify(json);
    }

    try {
        res = await (await fetch(route(uri), {
            method: "POST",
            credentials: "include",
            headers: {"Content-type": "application/json"},
            body: json
        })).json();

        if (uri != "/login" && !res.logged) {
            window.location.pathname = "/login";
        }

        return res;
    } catch (error) {
        alert("Error en " + uri + "POST");
        console.log(error)
    }
}

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
