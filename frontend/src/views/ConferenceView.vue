<template>
    <div class="container">
        <div>conferences:</div>
        <div class="row">
            <div v-for="i in conferences">
                <RouterLink :to="'/conference/'+i.id">{{ i.name }}</RouterLink>
            </div>
        </div>
    </div>
</template>

<script>
import { useUserStore } from '@/stores/UserStore.js'
import { RouterLink } from 'vue-router'

export default {
    data(){
        return {
            UserStore: useUserStore(),
            
            conference: {}
        };
    },
    mounted(){
        this.getConference();
    },
    methods: {
        async getConference(){
            try {
                const response = await this.$api.get('/conferences/');
                this.conferences = response.data;
                console.log(this.conferences);
            }catch(error){
                console.log(error);
            }
        }
    },
}
</script>