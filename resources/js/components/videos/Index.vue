<template>
    <div class="videos">
        <div v-for="video in videos" class="video-item">
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
            videos: [],
        }
    },
    created() {
        this.loadVideos()
    },
    methods: {
        loadVideos() {
            axios.get(`/api/videos`)
            .then(response => {
                this.videos = response.data

                this.views.loading = false
            })
            .catch(errors => {
                console.log(errors)
            })
        }
    }
}
</script>
