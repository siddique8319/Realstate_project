<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form  @submit.prevent="updatePost">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Year</label>
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Year" name="year" v-model="form.year" >
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Month</label>
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Month" name="name" v-model="form.month" >
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
         years:[]
        }
    },
   created() {
      let urr = `/post/editYear/${this.$route.params.id}`;
      let uri = '/api/year';
       this.axios.get(urr).then((response) => {
      this.form.fill(response.data)
      });
      this.axios.get(uri).then(response => {
      this.years = response.data.data;
      
      });
    },
    methods: {
     updatePost() {
          let uri = `/post/updateYear/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'year'});
          });
        } 
    }
  }
</script>
