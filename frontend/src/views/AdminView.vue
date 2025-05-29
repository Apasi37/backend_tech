<template>
    <div>admin view</div>
    <div>
        <div>
            <label for="tables">Select Table: </label>
            <select name="tables" id="tables" v-model="selectedTable" @change="getData()">
                <option value="users">Users</option>
                <option value="conferences">Conferences</option>
            </select>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th v-for="key in tableKeys" scope="col">{{ key }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in tableData">
                    <td v-for="i in data" scope="row">{{ i }}</td>
                    <td><button @click="openEdit()">edit</button></td>
                    <td><button @click="openDelete()">delete</button></td>
                </tr>
            </tbody>
        </table>
        </div>
        
        <div class="modal" role="dialog" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">Title</div>
                    </div>
                    <div class="modal-content">
                        <p>text</p>
                    </div>
                    <div class="modal-footer">
                        <button>Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            selectedTable: "users",
            tableKeys: {},
            tableData: {}
        };
    },
    mounted(){
        this.getData();
    },
    methods: {
        openAdd(){

        },
        openEdit(){

        },
        openDelete(){

        },
        async verifyAdmin(){
            try{
                await this.$api.get("/admin/verify");
            }catch(error){
                console.log(error);
                this.$router.push('/');
            }
        },
        async getData(){
            try{
                let response = await this.$api.get("/"+this.selectedTable);
                this.tableData = response.data;
                this.tableKeys = Object.keys(response.data[0]);
            }catch(error){
                console.log(error);
            }
        },
    }
}
</script>