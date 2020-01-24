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
                              <label for="exampleInputFirstName">Year</label>
                             <input  class="form-control" id="exampleInputFirstName" placeholder="Year Entry"  v-model="form.year" type="text" name="year" :class="{ 'is-invalid': form.errors.has('year') }" >
                              <has-error :form="form" field="year"></has-error>
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Month</label>
                            <input  class="form-control" id="exampleInputFirstName" placeholder="Month Entry"  v-model="form.month" type="text" name="month" :class="{ 'is-invalid': form.errors.has('month') }" >
                              <has-error :form="form" field="month"></has-error>
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
                              <th>Year</th>
                              <th>Month</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="year in years" :key="year.id">
                              <td>{{ year.id }}</td>
                              <td>{{ year.year }}</td>
                              <td>{{ year.month }}</td>
                              <td>
                               <router-link :to="{name: 'editYear', params: { id: year.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                               <button  class="btn btn-danger" @click.prevent="deletePost(year.id)"><i class=" fa fa-trash"></i>Delete</button>
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
          month:'',   
          year:'',
        }),
         years:[],
         msg: '',
        }
    },
   created() {
      let uri = '/api/year';
      this.axios.get(uri).then(response => {
      this.years = response.data.data;
      
      });
    },
    methods: {
        add(){
         this.form.post('/index/year-entry-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/year';
         this.axios.get(uri).then(response => {
         this.years = response.data.data;
              });  
          })
          this.form.reset();
         }, 
    
         deletePost(id)
      {
        let uri = `/index/deleteYear/${id}`;
        this.axios.delete(uri).then(response => {
          this.msg= 'Your Data has been deleted successfully!!!';   
         let uri = '/api/year';
         this.axios.get(uri).then(response => {
         this.years = response.data.data;
          });  
        this.posts.splice(this.posts.indexOf(id), 1);
        });
        //console.log('ajksdf'); 
      },
    
    }
  }
</script>
