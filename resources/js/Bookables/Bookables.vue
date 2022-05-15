<template>
    <div>
        <BookableListItem :bookables=bookables :loading=loading></BookableListItem>
    </div>
</template>

<script>
import BookableListItem from './BookableListItem';

export default {
    name: 'Bookables',
    components: {
        BookableListItem
    },
    data() {
        return {
            bookables: Array,
            loading: false
        }
    },
    created() {
        this.loading = true;

        axios.get('/api/bookables')
            .then(response => {
                this.bookables = response.data;
                this.loading = false;
            });
    }
}
</script>

<style>

</style>
