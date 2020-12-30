<template>
    <div>
        Navbar
        <router-link to="/">home</router-link>
        <router-link to="/catalog">catalog</router-link>
        <router-link to="/example">example</router-link>

        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Main.vue"
}
</script>

<style scoped>

</style>
