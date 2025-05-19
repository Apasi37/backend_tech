import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.bundle.js'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)

import api from './axios.js'
app.config.globalProperties.$api = api;

import { createPinia } from 'pinia'
const pinia = createPinia()

import VueCookies from 'vue-cookies'

app.use(router).use(pinia).use(VueCookies, { expires: '1d'})

app.mount('#app')