<template>
    <div class="names">
        <div v-for="name in names" class="name-item">
            <RouterLink :to="{name: 'Name', params: {id: name.id}}">
                {{ name.name }} ({{ name.videos_count }})
            </RouterLink>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            names: [],

            views: {
                loading: true,
            },
        }
    },
    created() {
        this.loadNames()
    },
    methods: {
        loadNames() {
            axios.get(`/api/names`)
                .then(response => {
                    this.names = response.data

                    this.views.loading = false
                })
                .catch(errors => {
                    console.log(errors)
                })
        }
    }
}
</script>
