<template>
    <div class="row">

        <div class="col-md-8 pb-4">
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

        <div class="col-md-4 pb-4">
            <Avalibility/>
        </div>
    </div>
</template>

<script>
import Avalibility from './Avalibility.vue';

export default {
    name: 'Bookable',
    components: {
        Avalibility
    },
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
