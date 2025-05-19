import { defineStore} from 'pinia'

export const useUserStore = defineStore('counter',{
    id: 'user',
    state: ()=>{
        return {
            userId: 0,
            email: "",
            name: ""
        }
    },
    actions: {
        setData(userId,email,name){
            this.userId = userId,
            this.email = email,
            this.name = name
        }
    }
})