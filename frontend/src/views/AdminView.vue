<template>
    <div>admin view</div>
</template>

<script>
import { useUserStore } from '@/stores/UserStore.js'

export default {
    data(){
        return {
            UserStore: useUserStore(),
        };
    },
    methods: {
    },
    mounted(){
    },
}
</script>