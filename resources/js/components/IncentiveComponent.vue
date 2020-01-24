<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form  @submit.prevent="add">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Incentive</label>
                               <input  class="form-control" id="exampleInputFirstName" placeholder="Incentive Entry"  v-model="form.incentive" type="text" name="incentive" :class="{ 'is-invalid': form.errors.has('incentive') }" >
                              <has-error :form="form" field="incentive"></has-error>
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
                              <th>Incentive</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="type in types" :key="type.id">
                              <td>{{ type.id }}</td>
                              <td>{{ type.incentive }}</td>
                              <td>
                               <router-link :to="{name: 'editIncentive', params: { id: type.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                               <button  class="btn btn-danger" @click.prevent="deletePost(type.id)"><i class=" fa fa-trash"></i>Delete</button>
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
          incentive:'',
             }),
          types:[],
          msg:''
        }
    },
   created() {
      let uri = '/api/incentive';
      this.axios.get(uri).then(response => {
      this.types = response.data.data;
      
      });
    },
    methods: {
      
         add(){
         this.form.post('/index/incentive-entry-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/incentive';
         this.axios.get(uri).then(response => {
         this.types = response.data.data;
              });  
          })
          this.form.reset();
         }, 
    
         deletePost(id)
      {
        let uri = `/index/deleteIncentive/${id}`;
        this.axios.delete(uri).then(response => {
         this.msg= 'Your Data has been deleted successfully!!!';
         let uri = '/api/incentive';
         this.axios.get(uri).then(response => {
         this.types = response.data.data;
          });  
        this.posts.splice(this.posts.indexOf(id), 1);
        });
       
      },
    
    }
  }
</script>
