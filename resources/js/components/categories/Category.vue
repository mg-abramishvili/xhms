<template>
    <div class="videos">
        <div v-for="video in category.videos" class="video-item">
            <RouterLink :to="{name: 'Video', params: {id: video.id}}">
                <div class="video-item-pic"></div>
                <div class="video-item-name">{{ video.name }}</div>
            </RouterLink>

            <div class="video-item-categories-and-names">
                <ul>
                    <li v-for="name in video.names">
                        <RouterLink :to="{name: 'Name', params: {id: name.id}}">
                            {{ name.name }}
                        </RouterLink>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            category: {},

            views: {
                loading: true,
            },
        }
    },
    created() {
        this.loadCategory()
    },
    methods: {
        loadCategory() {
            axios.get(`/api/category/${this.$route.params.slug}`)
                .then(response => {
                    this.category = response.data

                    this.views.loading = false
                })
                .catch(errors => {
                    console.log(errors)
                })
        }
    }
}
</script>
