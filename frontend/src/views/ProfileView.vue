<template>
    <div class="container mt-4">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h1>{{ UserStore.name }}</h1>
                    <div>{{ UserStore.email }}</div>
                    <button @click="logout()" class="btn btn-primary mt-5">Logout</button>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <h3>My conferences:</h3>
            <ul class="list-group">
                <RouterLink class="list-group-item list-group-item-action" :to="'/conference/'+i.id" v-for="i in conferences">{{ i.name }}</RouterLink>
            </ul>
        </div>
    </div>
</template>

<script>
import { useUserStore } from '@/stores/UserStore.js'
import { RouterLink } from 'vue-router'

export default {
    components:{
        RouterLink
    },
    data(){
        return {
            UserStore: useUserStore(),
            conferences: {}
        };
    },
    mounted(){
        this.getConferences();
    },
    methods: {
        async logout(){
            try {
                await this.$api.post("/logout");
                localStorage.removeItem('token');
                this.UserStore.$reset();
                this.$router.push({path:"/"});
            }catch(error){
                console.log(error);
            }
        },
        async getConferences(){
            try{
                const response = await this.$api.get("profile/conferences/"+this.UserStore.userId);
                this.conferences = response.data;
                console.log(this.conferences);
            }catch(error){
                console.log(error); 
            }
        }
    }
}
</script>