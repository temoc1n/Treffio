import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import 'bootstrap/dist/css/bootstrap.min.css'
import './assets/main.css'

import Vue from 'vue'
import helpers from './helpers/global_functions'

export default {
    install: () => {
        Vue.prototype.helpers = helpers
        Vue.helpers = helpers
    }
}

createApp(App).use(store).use(router).use(helpers).use(helpers).mount('#app')