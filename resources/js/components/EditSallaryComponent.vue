<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form  @submit.prevent="updatePost">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Staff</label>
                            <select class="form-control" name="info"   v-model="form.info" id="exampleFormControlSelect1" >
                              <option  v-for="type in types" :key="type.id" v-bind:value="type.info">{{type.info}}</option>
                             
                            </select>
                            </div>

                         
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Fix Sallary</label>
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Fix Sallary" v-model="form.sallary" name="sallary">
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
                          <th>Staff</th>
                          <th>Fix Sallary</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="sallary in sallaries" :key="sallary.id">
                          <td>{{ sallary.id }}</td>
                           <td>{{ sallary.info }}</td>
                          <td>{{ sallary.sallary }}</td>
                           <td>
                          <router-link :to="{name: 'editSallary', params: { id: sallary.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                           <button  class="btn btn-danger" @click.prevent="deletePost(sallary.id)"><i class=" fa fa-trash"></i>Delete</button></td>                       </tr>
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
          info: '',
          sallary:''
           }) , 
          sallaries:[],
          types:[]
        }
    },
   created() {
      let u = `/post/editSallary/${this.$route.params.id}`;
      let uri = '/api/sallary';
      let ur='/api/staff';
       this.axios.get(u).then((response) => {
           this.form.fill(response.data)
        });
      this.axios.get(uri).then(response => {
      this.sallaries = response.data.data;
     
      });
      
      this.axios.get(ur).then(response => {
      this.types = response.data.data;
      
      });
    },
    methods: {
       updatePost() {
          let uri = `/post/updateSallary/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'sallary'});
          });
        } 
     
    }
  }
</script>
