<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form  @submit.prevent="updatePost">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Project Select</label>
                            <select class="form-control" name="project_name"  v-model="form.project_name" id="exampleFormControlSelect1" >
                              <option  v-for="post in posts" :key="post.id" v-bind:value=post.name>{{post.name}}</option>
                             
                            </select>
                            </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">House Entry</label>
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Project name" v-model="form.house_no" name="house_no">
                            </div>
                          </div>

                        </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                        </div>

                   <div class="table-responsive">
                    <table data-toggle="data-table" class="table table-responsive" cellspacing="1" width="200%">
                      <thead style="background:#e4e6ed ">
                        <tr>
                          <th>ID</th>
                          <th>Project Name</th>
                           <th>House N0</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="pot in houses" :key="pot.id">
                          <td>{{ pot.id }}</td>
                           <td>{{ pot.project_name }}</td>
                          <td>{{ pot.house_no }}</td>
                          <td>
                          <router-link :to="{name: 'editHouse', params: { id: pot.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                           <button  class="btn btn-danger" @click.prevent="deletePost(pot.id)"><i class=" fa fa-trash"></i>Delete</button></td>                       </tr>
                      </tbody>
                    </table>
                      </div>
                    </div>
            </div>
      </div>

</template>

<script>
    export default {
        data(){
        return {
          form: new Form({
          project_name: '',
          house_no:''       
           }) , 
          posts:[],
          houses:[]
        }
    },
    mounted(){
    this.created()
    },
   created() {
      let ur = `/post/editHouse/${this.$route.params.id}`;
      let uri = '/api/projectNames';
      let url='/api/houseNames';
      this.axios.get(uri).then(response => {
      this.posts = response.data.data;
      });
      this.axios.get(url).then(response => {
      this.houses = response.data.data;
      });
      this.axios.get(ur).then((response) => {
      this.form.fill(response.data)
      });
    },
    methods: {
    updatePost() {
          let uri = `/post/updateHouse/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'house'});
          });
        } 
    }
  }
</script>
