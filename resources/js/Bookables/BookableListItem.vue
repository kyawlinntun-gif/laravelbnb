<template>
    <div class="row">
        <div v-if="bookables.length < 0">
            Loading...
        </div>
        <div v-else class="col-md-4 d-flex align-items-stretch" v-for="bookable in bookables" :key="bookable.id">
            <div class="card mt-2 mr-2 w-100">
                <div class="card-body">
                    <h5 class="card-title">{{ bookable.title }}</h5>
                    <p class="card-text">{{ bookable.description }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'BookableListItem',
    props: {
        bookables: {
            require: Array
        },
        loading: {
            require: Boolean
        }
    }
}
</script>

<style>

</style>
