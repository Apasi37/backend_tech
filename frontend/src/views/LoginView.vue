<template>

<form @submit.prevent="login" class="mt-5">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input v-model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input v-model="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
<div>{{ error }}</div>
</template>

<script>
import { useUserStore } from '@/stores/UserStore.js'

export default {
    data(){
        return {
            email: "admin@example.com",
            password: "password",
            UserStore: useUserStore(),
            error: "",
            loginSuccess: false
        };
    },
    methods: {
        async login(){
            try {
                const params = new URLSearchParams();
                params.append("email", this.email);
                params.append("password", this.password);

                const response = await this.$api.post("/login",params);

                localStorage.setItem('token',response.data.token);
                //this.$cookie.set("token", response.data.token, "expiring time")

                const user = response.data.user;
                this.UserStore.setData(user.id,user.email,user.name);
                this.$router.push({path:"/profile"});
            }catch(error){
                console.log(error);
            }
        }
    },
    mounted(){
    },
}
</script>