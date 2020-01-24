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
                            <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Flat No</label>
                            <select class="form-control"   v-model="form.flat_no" id="exampleFormControlSelect1" >
                              <option  v-for="flat in flats" :key="flat.id" v-bind:value="flat.flat_no">{{flat.flat_no}}</option>
                             
                            </select>
                            </div>  
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Flat Size Entry</label>
                              <input  class="form-control" id="exampleInputFirstName" placeholder="Flat Size Entry"  v-model="form.flat_size" type="text" name="flat_size" :class="{ 'is-invalid': form.errors.has('flat_size') }" >
                              <has-error :form="form" field="flat_size"></has-error>
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
                              <th>Flat Size</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="flatsize in flatsizes" :key="flatsize.id">
                          <td>{{ flatsize.id }}</td>
                           <td>{{ flatsize.flat_no }}</td>
                          <td>{{ flatsize.house_no }}</td>
                          <td>{{ flatsize.floor_no }}</td>
                           <td>{{ flatsize.flat_size }}</td>
                          <td>
                          <router-link :to="{name: 'editFlatsize', params: { id: flatsize.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                           <button  class="btn btn-danger" @click.prevent="deletePost(flatsize.id)"><i class=" fa fa-trash"></i>Delete</button></td>                       </tr>
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
          flat_size:'',   
          flat_no:'', 
          house_no: '',
          floor_no:'',}),
           flats:[],
          floors:[],
          houses:[],
          flatsizes:[],
          msg:''
        }
    },
   created() {
      let uri = '/api/houseNames';
      let url='/api/floors';
      let ur='/api/flats';
      let u='/api/flatsize';
      this.axios.get(uri).then(response => {
      this.houses = response.data.data;
      });
      this.axios.get(url).then(response => {
      this.floors = response.data.data;
      });
      this.axios.get(ur).then(response => {
      this.flats = response.data.data;
      });
      this.axios.get(u).then(response => {
      this.flatsizes = response.data.data;
      });
    },
    methods: {

     add(){
         this.form.post('/index/flatsize-entry-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/flatsize';
         this.axios.get(uri).then(response => {
         this.flatsizes = response.data.data;
              });  
          })
          this.form.reset();
         }, 
    
    deletePost(id)
      {
      let uri = `/index/deleteFlatsize/${id}`;
      this.axios.delete(uri).then(response => {
       this.msg= 'Your Data has been deleted successfully!!!';
      let u='/api/flatsize';  
      this.axios.get(u).then(response => {
      this.flatsizes = response.data.data;
      }); 
          });
       
      }
    }
  }
</script>
