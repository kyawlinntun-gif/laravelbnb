<template>
    <div class="row">

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div v-if="loading">
                        Loading...
                    </div>
                    <div v-else>
                        <h5>{{ bookable.title }}</h5>
                        <article>{{ bookable.description }}</article>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            avalibality & prices
        </div>
    </div>
</template>

<script>
export default {
    name: 'Bookable',
    data() {
        return {
            bookable: Object,
            loading: false
        }
    },
    created() {
        axios.get(`/api/bookables/${this.$route.params.id}`)
            .then(response => this.bookable = response.data);
    }
}
</script>

<style>

</style>
