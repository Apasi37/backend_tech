<template>
<div class="container mt-4">
  <div class="row mt-4">
    <div class="col-3">
      <h4 class="text-center">Conferences</h4>
      <ul class="list-group">
        <RouterLink class="list-group-item list-group-item-action" :to="'/conference/'+i.id" v-for="i in conferences">{{ i.name }}</RouterLink>
      </ul>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body text-break">
          <h1 class="text-center">Lorem Ipsum</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum, urna sed facilisis gravida, lectus neque consectetur mi, id lacinia risus nulla vel sem. Nam sollicitudin arcu ut turpis tincidunt, ut placerat nisi tincidunt. Fusce convallis urna lectus, id rhoncus mauris aliquet sit amet. Vestibulum luctus augue vel odio sollicitudin ornare. Integer vitae ex aliquam, tempus magna id, posuere erat. Quisque lacinia rhoncus tincidunt. Proin varius velit at ipsum faucibus fermentum.</p>
          <p class="text-center"><img src="../assets/logo.png" alt="" class="img-thumbnail" width="300" height="300"></p>
          <p>Morbi pretium magna tempus ante euismod, in consequat arcu consectetur. Mauris non lorem in ex mattis interdum vulputate in sem. Nulla tempor finibus elit, vitae accumsan dolor congue at. Integer hendrerit, felis sed molestie pharetra, dui sapien ullamcorper leo, id scelerisque ex lorem sed nisl. Maecenas a arcu in augue blandit suscipit. Pellentesque congue, leo vel euismod vulputate, diam metus porttitor ipsum, sed bibendum mi neque sed tellus. Cras luctus, magna eget viverra condimentum, sapien lorem iaculis ex, ut mollis elit arcu laoreet felis. Curabitur odio velit, volutpat eget ultricies at, tincidunt in massa. Praesent ex dui, pharetra sed accumsan eu, convallis ut eros. Duis lacus lorem, tristique ut posuere lobortis, tempus eu ligula. Maecenas ullamcorper orci sit amet sapien accumsan, in bibendum erat iaculis.</p>
          <p>Aliquam a elit tellus. Vestibulum et sem eget purus dapibus sollicitudin nec mollis lacus. Fusce mattis sit amet magna commodo scelerisque. Donec interdum nisi sit amet nulla gravida, in bibendum lorem laoreet. Sed dolor tellus, cursus eu porttitor eu, pretium nec massa. Integer enim felis, maximus eu aliquam sed, maximus sit amet ligula. Proin dapibus sit amet arcu in egestas. Duis fringilla at est at egestas.</p>
          <p>Duis nulla nisl, maximus sit amet massa sit amet, faucibus aliquam augue. Integer rhoncus in velit a sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ullamcorper sagittis purus quis fringilla. Mauris varius, sem ut eleifend vehicula, nibh felis laoreet odio, dignissim consequat purus tortor id dolor. Nunc ultrices elit ac tortor viverra dignissim. Etiam vitae libero rhoncus, pharetra est id, congue leo. Curabitur quis erat mi. Donec gravida libero leo, a faucibus quam ornare eu. Sed vestibulum, urna sit amet tincidunt vestibulum, arcu dolor congue mauris, vitae bibendum urna ipsum quis eros. Curabitur euismod vel ex sed pellentesque. Phasellus et dignissim turpis. Vestibulum rhoncus varius nunc eu ornare. Nunc rutrum mi risus, in varius ipsum venenatis sit amet. Ut cursus purus vel elit pulvinar, et feugiat massa hendrerit. Etiam vitae quam ac dui auctor sodales.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import { RouterLink } from 'vue-router'

export default {
  components:{
    RouterLink,
  },
  data(){
    return {
      conferences: {}
    };
  },
  mounted(){
    this.getConferences();
  },
  methods: {
    async getConferences(){
      try {
        const response = await this.$api.get('/conferences');
        this.conferences = response.data;
      }catch(error){
        console.log(error);
      }
    }
  },
}
</script>