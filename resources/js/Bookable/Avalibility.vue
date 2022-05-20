<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Avalibility</h6>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input type="text" id="from" class="form-control form-control-sm" placeholder="Start date" v-model="form" @keyup.enter="check">
            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input type="text" id="to" class="form-control form-control-sm" placeholder="End date" v-model="to" @keyup.enter="check">
            </div>
        </div>

        <button class="btn btn-secondary font-weight-bolder btn-block" @click.prevent="check">Check!</button>
    </div>
</template>

<script>
export default {
    name: 'Avalibility',
    data() {
        return {
            form: null,
            to: null
        }
    },
    methods: {
        check() {
            alert('Hello!');
        }
    }
}
</script>

<style>

</style>
