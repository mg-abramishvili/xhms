<template>
    <div class="videos">
        <div v-for="video in videos" class="video-item">
            <RouterLink :to="{name: 'Video', params: {id: video.id}}">
                {{ video.name }}
            </RouterLink>
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