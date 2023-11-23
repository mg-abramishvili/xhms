import { createRouter, createWebHistory } from 'vue-router'

import Home from './components/Home.vue'
import Video from './components/Video.vue'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/video/:id',
        name: 'Video',
        component: Video
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})