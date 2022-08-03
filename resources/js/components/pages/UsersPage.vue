<template>
    <div>
            <h1>User name: {{user.name}}</h1>
            <h2>User name: {{user.email}}</h2>
    </div>
</template>

<script>
    export default {
        name: "UsersPage",
        data(){
            return {
                userId: null,
                user:{}
            }
        },
        async mounted(){
            this.userid = this.$route.params.id;
            let result = await axios.get('/users/'+this.userid);
            this.user = result.data;

        },
    }
</script>

<style scoped>

</style>
