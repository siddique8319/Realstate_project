<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form @submit.prevent="add" >
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default" >
                              <label for="exampleInputFirstName">Project Name</label>
                              <input  class="form-control" id="exampleInputFirstName" placeholder="Project name"  v-model="form.name" type="text" name="name" :class="{ 'is-invalid': form.errors.has('name') }" >
                               <has-error :form="form" field="name"></has-error> 
                            </div>
                             
                          </div>

                        </div>
                         <button :disabled="form.busy" type="submit" class="btn btn-primary">Submit</button>
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
                                  <router-link :to="{name: 'editProjectName', params: { id: name.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
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
          msg:'',
               })  ,
          names:[],      
        }
    },
   created() {
      let uri = '/api/projectNames';
      this.axios.get(uri).then(response => {
      this.names = response.data.data;
      
      });
    },
    methods: {
     add(){

         this.form.post('/index/project-name-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/projectNames';
         this.axios.get(uri).then(response => {
         this.names = response.data.data;
              });  
          })
          this.form.reset();
         },
  deletePost(id)
      {
        let uri = `/index/deleteName/${id}`;
        this.axios.delete(uri).then(response => {
           this.msg= 'Your Data has been deleted successfully!!!';
         let uri = '/api/projectNames';
         this.axios.get(uri).then(response => {
         this.names = response.data.data;
          });  
       
        });
        //console.log('ajksdf'); 
      },
    
    }
  }
</script>
