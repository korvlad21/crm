<template>
    <div>
        <h1>
            {{title}}
        </h1>
        <User></User>

    </div>
</template>

<script>
    import User from './users/User';

    export default {
        name: "Home",
        components: {
          User,
        },
        data(){
            return{
                title:'Crm HelpDesc',
                user: [
                    {
                    name:'Roman',
                    last_name: 'Davydov',
                    },
                    {
                        name:'Dmitriy',
                        last_name: 'Ivanov',
                    },{
                        name:'Alex',
                        last_name: 'Petrov',
                    }
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
