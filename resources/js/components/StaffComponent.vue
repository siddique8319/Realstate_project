<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form  @submit.prevent="add">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Staff</label>
                            <select class="form-control"  v-model="form.type" id="exampleFormControlSelect1" >
                              <option  v-for="type in types" :key="type.id" v-bind:value="type.type">{{type.type}}</option>
                             
                            </select>
                            </div>

                          <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Designation</label>
                            <select class="form-control"   v-model="form.designation" id="exampleFormControlSelect1" >
                              <option  v-for="designation in designations" :key="designation.id" v-bind:value="designation.designation">{{designation.designation}}</option>
                             
                            </select>
                            </div>  
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Staff Information</label>
                              <input  class="form-control" id="exampleInputFirstName" placeholder="Staff Information"  v-model="form.info" type="text" name="info" :class="{ 'is-invalid': form.errors.has('info') }" >
                              <has-error :form="form" field="info"></has-error>
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
                          <th>Staff_Type</th>
                           <th>Designation</th>
                            <th>Information</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="staff in stafs" :key="staff.id">
                          <td>{{ staff.id }}</td>
                           <td>{{ staff.type }}</td>
                          <td>{{ staff.designation }}</td>
                          <td>{{ staff.info }}</td>
                          <td>
                          <router-link :to="{name: 'editStaff', params: { id: staff.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                           <button  class="btn btn-danger" @click.prevent="deletePost(staff.id)"><i class=" fa fa-trash"></i>Delete</button></td>                       </tr>
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
         designation:'',
         type:'',
         info:'',
        }),
          types:[],
          designations:[],
          stafs:[],
          msg:'',
        }
    },
   created() {
      let uri = '/api/staffType';
      let url='/api/designation';
      let ur='/api/staff';
      this.axios.get(uri).then(response => {
      this.types = response.data.data;
      });
      this.axios.get(url).then(response => {
      this.designations = response.data.data;
      });
      this.axios.get(ur).then(response => {
      this.stafs = response.data.data;
      });
    },
    methods: {
      add(){
         this.form.post('/index/staff-entry-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/staff';
         this.axios.get(uri).then(response => {
         this.stafs = response.data.data;
              });  
          })
          this.form.reset();
         }, 
   
    deletePost(id)
      {
        let uri = `/index/deleteStaff/${id}`;
        this.axios.delete(uri).then(response => {
           this.msg= 'Your Data has been deleted successfully!!!';
        
          let ur='/api/staff';  
       this.axios.get(ur).then(response => {
      this.stafs = response.data.data;
      });   
        });
        //console.log('ajksdf'); 
      }
    }
  }
</script>
