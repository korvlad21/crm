<template>
    <div>
        <ul>
            <li>
                <router-link to="/users">Users List</router-link>
            </li>
            <li>
                <router-link to="/admin">Admin</router-link>
            </li>
        </ul>


        <router-view/>
    </div>


</template>

<script>
    import User from './users/User';

    export default {
        name: "Home",
        components: {
          'user-card': User,
        },
        data(){
            return{
                title:'Crm HelpDesc',
                users: [
                    {
                    name:'Roman',
                    last_name: 'Davydov',
                    role: 'admin'
                    },
                    {
                        name:'Dmitriy',
                        last_name: 'Ivanov',
                        role: 'manager'
                    },
                    {
                        name:'Alex',
                        last_name: 'Petrov',
                        role: 'client'
                    },
                    {
                        name:'Ivan',
                        last_name: 'Sidorov',
                        role: 'client'
                    },
                    {
                        name:'Fedor',
                        last_name: 'Sidorov',
                        role: 'manager'
                    },
                ],
                name: null
            }
        },
        methods:{
            addUser(){
                this.users.push(this.name);
                this.clearName();
            },
            clearName(){
                this.name = null;
            }
        }
    }
</script>

<style scoped>

</style>
