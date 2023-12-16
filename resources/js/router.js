import { createRouter, createWebHistory } from 'vue-router'

import Home from './components/Home.vue'

import Videos from './components/videos/Index.vue'
import Video from './components/videos/Video.vue'

import Categories from './components/categories/Index.vue'
import Category from './components/categories/Category.vue'

import Names from './components/names/Index.vue'
import Name from './components/names/Name.vue'

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/videos',
        name: 'Videos',
        component: Videos
    },
    {
        path: '/video/:id',
        name: 'Video',
        component: Video
    },
    {
        path: '/categories',
        name: 'Categories',
        component: Categories
    },
    {
        path: '/category/:slug',
        name: 'Category',
        component: Category
    },
    {
        path: '/names',
        name: 'Names',
        component: Names
    },
    {
        path: '/name/:id',
        name: 'Name',
        component: Name
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})
