<template>
    <div class="videos">
        <div v-for="video in name.videos" class="video-item">
            <RouterLink :to="{name: 'Video', params: {id: video.id}}">
                <div class="video-item-pic"></div>
                <div class="video-item-name">{{ video.name }}</div>
            </RouterLink>

            <div class="video-item-categories-and-names">
                <ul>
                    <li v-for="category in video.categories">
                        <RouterLink :to="{name: 'Category', params: {slug: category.slug}}">
                            {{ category.name }}
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
            name: {},

            views: {
                loading: true,
            },
        }
    },
    created() {
        this.loadName()
    },
    methods: {
        loadName() {
            axios.get(`/api/name/${this.$route.params.id}`)
                .then(response => {
                    this.name = response.data

                    this.views.loading = false
                })
                .catch(errors => {
                    console.log(errors)
                })
        }
    }
}
</script>
