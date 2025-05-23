<template>
    <div class="container">
        <div class="row">
            <div>{{ UserStore.name }}</div>
            <div>{{ UserStore.email }}</div>
            <div>{{ UserStore.userId }}</div>
        </div>
        <div class="row">
            <div>conferences</div>
        </div>
    </div>
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