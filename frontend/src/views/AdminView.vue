<template>
    <div>admin view</div>
</template>

<script>
import { useUserStore } from '@/stores/UserStore.js'

export default {
    created(){
        this.verifyAdmin();
    },
    data(){
        return {
            UserStore: useUserStore(),
        };
    },
    methods: {
        async verifyAdmin(){
            try{
                await this.$api.get("/admin/verify");
            }catch(error){
                console.log(error);
                this.$router.push('/');
            }
        }
    },
    mounted(){
    },
}
</script>