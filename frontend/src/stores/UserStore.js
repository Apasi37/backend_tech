import { defineStore} from 'pinia'

export const useUserStore = defineStore('user',{
    id: 'user',
    state: ()=>{
        return {
            userId: 0,
            role: "",
            email: "",
            name: ""
        }
    },
    actions: {
        setData(userId,role,email,name){
            this.userId = userId,
            this.role = role,
            this.email = email,
            this.name = name
        }
    }
})