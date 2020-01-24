<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form  @submit.prevent="add">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select House</label>
                            <select class="form-control"   v-model="form.house_no" id="exampleFormControlSelect1" >
                              <option  v-for="house in houses" :key="house.id" v-bind:value="house.house_no">{{house.house_no}}</option>
                             
                            </select>
                            </div>

                          <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Floor</label>
                            <select class="form-control"   v-model="form.floor_no" id="exampleFormControlSelect1" >
                              <option  v-for="floor in floors" :key="floor.id" v-bind:value="floor.floor_no">{{floor.floor_no}}</option>
                             
                            </select>
                            </div>  
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Flat No Entry</label>
                                <input  class="form-control" id="exampleInputFirstName" placeholder="House Entry"  v-model="form.flat_no" type="text" name="flat_no" :class="{ 'is-invalid': form.errors.has('flat_no') }" >
                               <has-error :form="form" field="flat_no"></has-error>
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
                          <th>Flat No</th>
                           <th>House N0</th>
                            <th>Floor N0</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="flatno in flatnos" :key="flatno.id">
                          <td>{{ flatno.id }}</td>
                           <td>{{ flatno.flat_no }}</td>
                          <td>{{ flatno.house_no }}</td>
                          <td>{{ flatno.floor_no }}</td>
                          <td>
                          <router-link :to="{name: 'editFlat', params: { id: flatno.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                           <button  class="btn btn-danger" @click.prevent="deletePost(flatno.id)"><i class=" fa fa-trash"></i>Delete</button></td>                       </tr>
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
          flat_no:'', 
          house_no: '',
          floor_no:'',}),
          flatnos:[],
          floors:[],
          houses:[],
          msg:''
        }
    },
   created() {
      let uri = '/api/houseNames';
      let url='/api/floors';
      let ur='/api/flats';
      this.axios.get(uri).then(response => {
      this.houses = response.data.data;
      });
      this.axios.get(url).then(response => {
      this.floors = response.data.data;
      });
      this.axios.get(ur).then(response => {
      this.flatnos = response.data.data;
      });
    },
    methods: {

       add(){
         this.form.post('/index/flatno-entry-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/flats';
         this.axios.get(uri).then(response => {
         this.flatnos = response.data.data;
              });  
          })
          this.form.reset();
         }, 
   
    deletePost(id)
      {
        let uri = `/index/deleteFlat/${id}`;
        this.axios.delete(uri).then(response => {
           this.msg= 'Your Data has been deleted successfully!!!';
         let url = '/api/floors';
          let ur='/api/flats';  
       this.axios.get(ur).then(response => {
      this.flatnos = response.data.data;
      });   
        });
        //console.log('ajksdf'); 
      }
    }
  }
</script>
