<template>
    <div class="video-detail">
        <h1>{{ video.file }}</h1>

<!--        <video v-if="video.file" controls>-->
<!--            <source :src="video.file" type="video/mp4">-->
<!--        </video>-->
    </div>
</template>

<script>
export default {
    data() {
        return {
            video: {},
        }
    },
    created() {
        this.loadVideo()
    },
    methods: {
        loadVideo() {
            axios.get(`/api/video/${this.$route.params.id}`)
            .then(response => {
                this.video = response.data

                this.views.loading = false
            })
            .catch(errors => {
                console.log(errors)
            })
        }
    }
}
</script>
