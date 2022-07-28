<template>
    <div>
        <h2>{{user.name}}</h2>
        <h2>{{user.last_name}}</h2>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        name: "User"
    }
</script>

<style scoped>

</style>
