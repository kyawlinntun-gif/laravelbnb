<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">
            Check Avalibility
            <span v-if="hasAvalibality" class="text-success"> (Avalibale)</span>
            <span v-if="noAvalibality" class="text-danger"> (Not Avalibale)</span>
        </h6>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input type="text" id="from" class="form-control form-control-sm" placeholder="Start date" v-model="from" @keyup.enter="check" :class="[{'is-invalid': this.errorFor('from')}]">
                <div class="invalid-feedback" v-for="(error, index) in this.errorFor('from')" v-bind:key="'from' + index">
                {{ error }}</div>
            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input type="text" id="to" class="form-control form-control-sm" placeholder="End date" v-model="to" @keyup.enter="check" :class="[{'is-invalid': this.errorFor('to')}]">
                <div class="invalid-feedback" v-for="(error, index) in this.errorFor('to')" v-bind:key="'to' + index">{{ error }}</div>
            </div>
        </div>

        <button class="btn btn-secondary font-weight-bolder btn-block" @click.prevent="check" :disabled="loading">Check!</button>
    </div>
</template>

<script>
export default {
    name: 'Avalibility',
    data() {
        return {
            from: null,
            to: null,
            loading: false,
            status: null,
            errors: null
        }
    },
    methods: {
        check() {
            this.loading = true;
            this.errors = null;

            axios.get(`https://laravelbnb.com/api/bookables/1/avalibility?from=${this.from}&to=${this.to}`)
            .then(response => {
                this.status = response.status;
            })
            .catch(errors => {
                if(422 === errors.response.status) {
                    this.errors = errors.response.data.errors;
                }

                this.status = errors.response.status;
            }).then(() => this.loading = false);
        },
        errorFor(field) {
            return this.hasErrors && this.errors[field] ? this.errors[field] : null;
        }
    },
    computed: {
        hasErrors() {
            return 422 === this.status && this.errors != null;
        },
        hasAvalibality() {
            return 200 === this.status;
        },
        noAvalibality() {
            return 404 === this.status;
        }
    }
}
</script>

<style scoped>
label {
    font-size: 0.7rem;
    text-transform: uppercase;
    color: gray;
    font-weight: bolder;
}

.is-invalid {
    border-color: #b22222;
    background-image: none;
}

.invalid-feedback {
    color: #b22222;
}
</style>
