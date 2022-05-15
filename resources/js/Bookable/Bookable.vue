<template>
    <div>
        
    </div>
</template>

<script>
export default {
    name: 'Bookable',
    data() {
        return {
            bookable: Object
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
