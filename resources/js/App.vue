<template>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <RouterLink :to="{name: 'Videos'}">Videos</RouterLink>
                    </li>
                    <li>
                        <RouterLink :to="{name: 'Categories'}">Categories</RouterLink>
                    </li>
                    <li>
                        <RouterLink :to="{name: 'Names'}">Names</RouterLink>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <router-view :key="$route.path" />
        </div>
    </main>
</template>
