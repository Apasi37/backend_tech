<template>
    <div class="container mt-4 mb-4">
        <div class="row">
            <h3>{{ conference.name }}</h3>
            <div v-if="UserStore.role=='editor' || UserStore.role=='admin'">
                <button @click="editToggle = !editToggle" class="btn btn-primary">edit page</button>
                <button @click="editPage()" class="btn btn-primary ms-2">confirm edit</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-3">
                <ul class="list-group">
                    <button @click="routerPush(i.id)" class="list-group-item list-group-item-action" v-for="i in conference.page">{{ i.name }}</button>
                    <button @click="" class="btn btn-primary text-center mt-4" data-bs-toggle="modal" data-bs-target="#modalAdd" v-if="UserStore.role=='editor' || UserStore.role=='admin'">Add page</button>
                </ul>
            </div>
            <div class="col">
                <div class="card" v-if="!editToggle">
                    <div class="card-body">
                        <div class="text-break overflow-auto" v-html="pageHtml"></div>
                    </div>
                </div>
                <div v-else>
                    <Editor v-model="pageHtml"></Editor>
                </div>
            </div>
        </div>

<div class="modal" tabindex="-1" id="modalAdd" @click="modalConfirm=false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-if="modalConfirm">{{ responseMessage }}</h5>
        <h5 class="modal-title" v-else>Adding page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="modalConfirm=false"></button>
      </div>
      <div class="modal-body">
        <div v-if="!modalConfirm">
            <table class="table table-bordered table-sm"> 
                <thead><tr>
                    <th scope="col">Name</th>
                </tr></thead>
                <tbody><tr>
                    <td scope="row"><input type="text" name="name" v-model="pageName"></td>
                </tr></tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="modalConfirm=false">Close</button>
        <button type="button" class="btn btn-primary" v-if="!modalConfirm" @click="addPage()">Add</button>
      </div>
    </div>
  </div>
</div>
    </div>
</template>

<script>
import Editor from '../components/Wysiwyg.vue'
import { useUserStore } from '@/stores/UserStore.js'
export default {
    components:{
        Editor,
    },
    data(){
        return {
            UserStore: useUserStore(),
            conference: {},
            pageHtml: "",
            editToggle: false,
            pageName: "",
            modalConfirm: false,
            responseMessage: "",
        };
    },
    mounted(){
        this.getConference();
    },
    methods: {
        async addPage(){
            try {
                const params = new URLSearchParams();
                params.append("conference_id", this.conference.id);
                params.append("name", this.pageName);
                params.append("html", "<p>Page is empty</p>");
                const response = await this.$api.post('/pages',params);
                this.responseMessage = response.data.message;
                this.getConference();
                this.setPage(this.$route.query.id);
                this.modalConfirm = true;
            }catch(error){
                console.log(error);
            }
        },
        async editPage(){
            try {
                const params = new URLSearchParams();
                if(this.pageHtml!="")params.append("html", this.pageHtml);
                await this.$api.patch('/pages/'+this.$route.query.page,params);
                this.getConference();
                this.setPage(this.$route.query.id);
                this.editToggle = false;
            }catch(error){
                console.log(error);
            }
        },
        async getConference(){
            try {
                const response = await this.$api.get('/conferences/'+this.$route.params.id);
                this.conference = response.data;
                if(this.pageHtml==""){
                    this.pageHtml = this.conference.page[0].html;
                }
            }catch(error){
                console.log(error);
            }
        },
        routerPush(page){
            this.editToggle = false;
            this.$router.push({query: { page: page }});
        },
        setPage(newValue){
            for(let i=0;i<this.conference.page.length;i++){
                if(this.conference.page[i].id == newValue){
                    this.pageHtml = this.conference.page[i].html;
                }
            }
        }
    },
    watch:{
        '$route.query.page'(newValue){
            this.setPage(newValue);
        }
    }
}
</script>