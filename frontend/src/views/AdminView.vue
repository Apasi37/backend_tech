<template>
    <div>admin view</div>
    <div>
        <div>
            <label for="tables">Select Table: </label>
            <select name="tables" id="tables" v-model="selectedTable" @change="getData()">
                <option value="users">Users</option>
                <option value="conferences">Conferences</option>
            </select>
            <button data-bs-toggle="modal" data-bs-target="#modalAdd" @click="openModal({})">Add</button>
        </div>

        <div class="table-responsive">

        <div v-if="tableData==false"><p>Table is empty</p></div>
        <table class="table table-bordered table-sm" v-else>
            <thead>
                <tr>
                    <th v-for="key in tableKeys" scope="col">{{ key }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in tableData">
                    <td v-for="i in data" scope="row">{{ i }}</td>
                    <td><button data-bs-toggle="modal" data-bs-target="#modalEdit" @click="openModal(data)">edit</button></td>
                    <td><button data-bs-toggle="modal" data-bs-target="#modalDelete" @click="openModal(data)">delete</button></td>
                </tr>
            </tbody>
        </table>
        </div>
        
<div class="modal" tabindex="-1" id="modalDelete" @click="modalConfirm=false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-if="modalConfirm">Row deleted successfully!</h5>
        <h5 class="modal-title" v-else>Are you sure you want to delete this row?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="modalConfirm=false"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-sm" v-if="!modalConfirm"> 
            <thead><tr><th v-for="key in tableKeys" scope="col">{{ key }}</th></tr></thead>
            <tbody><tr><td v-for="i in modalData" scope="row">{{ i }}</td></tr></tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="modalConfirm=false">Close</button>
        <button type="button" class="btn btn-primary" @click="deleteRow()" v-if="!modalConfirm">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalAdd" @click="modalConfirm=false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-if="modalConfirm">Row added successfully!</h5>
        <h5 class="modal-title" v-else>Adding row into table: {{ selectedTable }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="modalConfirm=false"></button>
      </div>
      <div class="modal-body">
        <div v-if="!modalConfirm">
            <table class="table table-bordered table-sm" v-if="selectedTable=='users'"> 
                <thead><tr>
                    <th scope="col">Role</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr></thead>
                <tbody><tr>
                    <td scope="row">
                        <select name="roles" id="roles" v-model="addRole">
                            <option value="editor">Editor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                    <td scope="row"><input type="text" name="name" v-model="addName"></td>
                    <td scope="row"><input type="text" name="email" v-model="addEmail"></td>
                    <td scope="row"><input type="text" name="password" v-model="addPassword"></td>
                </tr></tbody>
            </table>
            <table class="table table-bordered table-sm" v-if="selectedTable=='conferences'"> 
                <thead><tr>
                    <th scope="col">Name</th>
                </tr></thead>
                <tbody><tr>
                    <td scope="row"><input type="text" name="name" v-model="addName"></td>
                </tr></tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="modalConfirm=false">Close</button>
        <button type="button" class="btn btn-primary" v-if="!modalConfirm" @click="addRow()">Add</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalEdit" @click="modalConfirm=false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-if="modalConfirm">Row edited successfully!</h5>
        <h5 class="modal-title" v-else>Editing row</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="modalConfirm=false"></button>
      </div>
      <div class="modal-body">
        <div v-if="!modalConfirm">
            <table class="table table-bordered table-sm"> 
                <thead><tr><th v-for="key in tableKeys" scope="col">{{ key }}</th></tr></thead>
                <tbody><tr><td v-for="i in modalData" scope="row">{{ i }}</td></tr></tbody>
            </table>
            <table class="table table-bordered table-sm" v-if="selectedTable=='users'"> 
                <thead><tr>
                    <th scope="col">Role</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr></thead>
                <tbody><tr>
                    <td scope="row">
                        <select name="roles" id="roles" v-model="addRole">
                            <option value="editor">Editor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                    <td scope="row"><input type="text" name="name" v-model="addName"></td>
                    <td scope="row"><input type="text" name="email" v-model="addEmail"></td>
                    <td scope="row"><input type="text" name="password" v-model="addPassword"></td>
                </tr></tbody>
            </table>
            <table class="table table-bordered table-sm" v-if="selectedTable=='conferences'"> 
                <thead><tr>
                    <th scope="col">Name</th>
                </tr></thead>
                <tbody><tr>
                    <td scope="row"><input type="text" name="name" v-model="addName"></td>
                </tr></tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="modalConfirm=false">Close</button>
        <button type="button" class="btn btn-primary" v-if="!modalConfirm" @click="editRow()">Edit</button>
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
            tableData: {},
            modalData: {},
            modalConfirm: false,
            addRole: "",
            addName: "",
            addEmail: "",
            addPassword: "",
        };
    },
    mounted(){
        this.getData();
    },
    methods: {
        openModal(data){
            this.modalData = data;
        },
        async editRow(){
            try{
                const params = new URLSearchParams();
                if(this.selectedTable=='users'){
                    if(this.addRole!="")params.append("role", this.addRole);
                    if(this.addName!="")params.append("name", this.addName);
                    if(this.addEmail!="")params.append("email", this.addEmail);
                    if(this.addPassword!="")params.append("password", this.addPassword);
                }else if(this.selectedTable == 'conferences'){
                    params.append("name", this.addName);
                }
                await this.$api.patch("/"+this.selectedTable+"/"+this.modalData.id,params);
                this.modalConfirm = true;
                this.getData();
            }catch(error){
                console.log(error);
                this.$router.push('/');
            }
        },
        async addRow(){
            try{
                const params = new URLSearchParams();
                if(this.selectedTable=='users'){
                    params.append("role", this.addRole);
                    params.append("name", this.addName);
                    params.append("email", this.addEmail);
                    params.append("password", this.addPassword);
                }else if(this.selectedTable == 'conferences'){
                    params.append("name", this.addName);
                }
                
                await this.$api.post("/"+this.selectedTable,params);
                this.modalConfirm = true;
                this.getData();
            }catch(error){
                console.log(error);
                this.$router.push('/');
            }
        },
        async deleteRow(){
            try{
                await this.$api.delete("/"+this.selectedTable+"/"+this.modalData.id);
                this.modalConfirm = true;
                this.getData();
            }catch(error){
                console.log(error);
                this.$router.push('/');
            }
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
                if (response.data!=""){
                    this.tableData = response.data;
                    this.tableKeys = Object.keys(response.data[0]);
                }else{
                    this.tableData = false
                }
                
            }catch(error){
                console.log(error);
            }
        },
    }
}
</script>