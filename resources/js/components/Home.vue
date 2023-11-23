<template>
    <div class="videos">
        <div v-for="video in videos" class="video-item">
            
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