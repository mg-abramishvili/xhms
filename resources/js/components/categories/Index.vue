<template>
    <div class="categories">
        <div v-for="category in categories" class="category-item">
            <RouterLink :to="{name: 'Category', params: {slug: category.slug}}">
                {{ category.name }} ({{ category.videos_count }})
            </RouterLink>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: [],

            views: {
                loading: true,
            },
        }
    },
    created() {
        this.loadCategories()
    },
    methods: {
        loadCategories() {
            axios.get(`/api/categories`)
                .then(response => {
                    this.categories = response.data

                    this.views.loading = false
                })
                .catch(errors => {
                    console.log(errors)
                })
        }
    }
}
</script>
