<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form  @submit.prevent="updatePost">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Commission Type</label>
                              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Commission Typle" v-model="form.commission_type" name="commission_type" >
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
                              <th>Name</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="type in types" :key="type.id">
                              <td>{{ type.id }}</td>
                              <td>{{ type.commission_type }}</td>
                              <td>
                               <router-link :to="{name: 'editCommissionType', params: { id: type.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
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
          commission_type:'',   
         
        }),
          types:[]
        }
    },
   created() {
       let urr = `/post/editCommissionType/${this.$route.params.id}`;
      let uri = '/api/commissionType';
       this.axios.get(urr).then((response) => {
      this.form.fill(response.data)
      });
      this.axios.get(uri).then(response => {
      this.types = response.data.data;
      
      });
    },
    methods: {
      updatePost() {
          let uri = `/post/updateCommissionType/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'commissionType'});
          });
        } 
     
    }
  }
</script>
