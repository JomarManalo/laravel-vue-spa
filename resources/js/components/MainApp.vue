<template>
    <div id="main">
        <Header></Header>

        <router-view></router-view>
    </div>
</template>

<script>
    import Header from './Header.vue';
    export default {
        name: 'main-app',
        components: {Header}
    }
</script>
