<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form  @submit.prevent="updatePost">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select House</label>
                            <select class="form-control" name="house_no"  v-model="form.house_no" id="exampleFormControlSelect1" >
                              <option  v-for="house in houses" :key="house.id" v-bind:value="house.house_no">{{house.house_no}}</option>
                             
                            </select>
                            </div>

                          <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Floor</label>
                            <select class="form-control" name="floor_no"  v-model="form.floor_no" id="exampleFormControlSelect1" >
                              <option  v-for="floor in floors" :key="floor.id" v-bind:value="floor.floor_no">{{floor.floor_no}}</option>
                             
                            </select>
                            </div>  
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Flat No Entry</label>
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Flat No" v-model="form.flat_no" name="flat_no">
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
          houses:[]
        }
    },
   created() {
      let u=`/post/editFlat/${this.$route.params.id}`;
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
       this.axios.get(u).then(response => {
      this.form.fill(response.data)
      });
    },
    methods: {
     updatePost() {
          let u = `/post/updateFlat/${this.$route.params.id}`;
          this.axios.post(u, this.form).then((response) => {
            this.$router.push({name: 'flatnoEntry'});
          });
        }
    }
  }
</script>
