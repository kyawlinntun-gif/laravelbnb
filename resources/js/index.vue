<template>
    <div>
        <nav class="navbar bg-white border-bottom navbar-light">
            <router-link class="navbar-brand mr-auto" :to="{name: 'home'}">Home</router-link>
            <router-link class="btn" to="#">Second</router-link>
        </nav>
        <div class="container my-4">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Index'
}
</script>

<style>

</style>
