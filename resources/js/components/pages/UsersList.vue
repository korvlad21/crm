<template>
    <div>
        <h2>
            {{title}}
        </h2>
        <user-card
            v-for="(user,index) in users"
            :user="user"
            text="some text"
            v-bind:key="index"

        />

    </div>
</template>

<script>
    import User from '../users/User.vue';
    export default {
        name: "UsersList",
        components: {
            'user-card': User,
        },
        data(){
            return{
                title:'Crm HelpDesc',
                users: [
                ],

            }
        },
        async mounted(){
            let result = await axios.get('/users');
            this.users = result.data
            // axios.get('/users').then(result => this.users = result.data)
        },
    }
</script>

<style scoped>

</style>
