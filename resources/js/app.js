import './bootstrap'

import { createApp } from 'vue'

import Router from './router'

import App from './App.vue'

// Loader
import Loader from './components/Loader.vue'

const app = createApp(App)
            .component('Loader', Loader)
            .use(Router)

app.mount('#app')