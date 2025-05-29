<template>
    <div class="container">
        <div class="row">
            <div>{{ UserStore.name }}</div>
            <div>{{ UserStore.email }}</div>
            <div>{{ UserStore.userId }}</div>
            <button @click="logout" class="btn btn-primary">Logout</button>
        </div>
        <div class="row">
            <div>conferences</div>
            <div v-for="i in conferences">
                <div>
                    {{ i.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { useUserStore } from '@/stores/UserStore.js'

export default {
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