<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                     
                      <form  @submit.prevent="updatePost">
                        
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Project Name</label>                            
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Project name"  name="name" v-model="form.name" >
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
                              <th>Name</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="name in names" :key="name.id">
                              <td>{{ name.id }}</td>
                              <td>{{ name.name }}</td>
                              <td>
                                  <router-link :to="{name: 'name', params: { id: name.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                                <button  class="btn btn-danger" @click.prevent="deletePost(name.id)"><i class=" fa fa-trash"></i>Delete</button> 
                              </td>
                            </tr>
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
          name: '',
       
           }) , 
      
           names:[],  

        } 
    },
     mounted(){
      this.created()
    },
   created() {
      let uri = `/post/editProjectName/${this.$route.params.id}`;
       let ur = '/projectNames';
           this.axios.get(uri).then((response) => {
           this.form.fill(response.data.posts)
        });
         this.axios.get(ur).then(response => {
         this.names = response.data.data;
      
      });
    },
   
    methods: {
      updatePost() {
          let uri = `/post/updateProjectName/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'name'});
          });
        } 
     
    }
  }
</script>
