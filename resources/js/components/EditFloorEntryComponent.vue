<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form  @submit.prevent="updatePost">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select House</label>
                            <select class="form-control" name="house_no"   v-model="form.house_no" id="exampleFormControlSelect1" >
                              <option  v-for="pst in houses" :key="pst.id" v-bind:value="pst.house_no">{{pst.house_no}}</option>
                             
                            </select>
                            </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Floor Entry</label>
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Floor no"   v-model="form.floor_no" >
                            </div>
                          </div>

                        </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                        </div>

                   <div class="table-responsive">
                    <!-- <table data-toggle="data-table" class="table table-responsive" cellspacing="1" width="200%">
                      <thead style="background:#e4e6ed ">
                        <tr>
                          <th>ID</th>
                          <th>Floor</th>
                           <th>House N0</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="pot in houses" :key="pot.id">
                          <td>{{ pot.id }}</td>
                           <td>{{ pot.floor_no }}</td>
                          <td>{{ pot.house_no }}</td>
                          <td>
                          <router-link :to="{name: 'editFloor', params: { id: post.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                           <button  class="btn btn-danger" @click.prevent="deletePost(pot.id)"><i class=" fa fa-trash"></i>Delete</button></td>                       </tr>
                      </tbody>
                    </table> -->
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
          floor_no:''       
           }) ,        
          houses:[]
        }
    },
   created() {
      let url = '/api/houseNames';
      let ur=`/post/editFloor/${this.$route.params.id}`;
      this.axios.get(ur).then(response => {
      this.form.fill(response.data)
      });
      this.axios.get(url).then(response => {
      this.houses = response.data.data;
      });
    },
    methods: {
     updatePost() {
          let uri = `/post/updateFloor/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
            this.$router.push({name: 'floorEntry'});
          });
        }
    }
  }
</script>
