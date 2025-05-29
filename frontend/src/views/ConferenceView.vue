<template>
    <div class="container">
        <div>conferences:</div>
        <div class="row">
            <div v-for="i in conference.page">
                <button @click="routerPush(i.id)">{{ i.name }}</button>
            </div>
            <div v-html="pageHtml"></div>
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
            conference: {},
            pageHtml: ""
        };
    },
    mounted(){
        this.getConference();
    },
    methods: {
        async getConference(){
            try {
                const response = await this.$api.get('/conferences/'+this.$route.params.id);
                this.conference = response.data;
            }catch(error){
                console.log(error);
            }
        },
        routerPush(page){
            this.$router.push({query: { page: page }});
        }
    },
    watch:{
        '$route.query.page'(newValue){
            for(let i=0;i<this.conference.page.length;i++){
                if(this.conference.page[i].id == newValue){
                    this.pageHtml = this.conference.page[i].html;
                }
            }
        }
    }
}
</script>