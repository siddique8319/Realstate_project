<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form  @submit.prevent="add">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Project Select</label>
                            <select class="form-control"   v-model="form.project_name" id="exampleFormControlSelect1" >
                              <option  v-for="post in posts" :key="post.id" v-bind:value=post.name>{{post.name}}</option>
                             
                            </select>
                            </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">House Entry</label>
                               <input  class="form-control" id="exampleInputFirstName" placeholder="House Entry"  v-model="form.house_no" type="text" name="house_no" :class="{ 'is-invalid': form.errors.has('house_no') }" >
                               <has-error :form="form" field="house_no"></has-error> 
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
          house_no: '',
          project_name:'',}),
          posts:[],
          houses:[],
          msg:''
        }
    },
   created() {
      let uri = '/api/projectNames';
      let url='/api/houseNames';
      this.axios.get(uri).then(response => {
      this.posts = response.data.data;
      });
      this.axios.get(url).then(response => {
      this.houses = response.data.data;
      });
    },
    methods: {    
        add(){
         this.form.post('/index/house-entry-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/houseNames';
         this.axios.get(uri).then(response => {
         this.houses = response.data.data;
              });  
          })
          this.form.reset();
         },
    deletePost(id)
      {
        let uri = `/index/deleteHouse/${id}`;
        this.axios.delete(uri).then(response => {
           this.msg= 'Your Data has been deleted successfully!!!';
         let url = '/api/houseNames';
          this.axios.get(url).then(response => {
          this.houses = response.data.data;
         });
        });
        //console.log('ajksdf'); 
      }
    }
  }
</script>
