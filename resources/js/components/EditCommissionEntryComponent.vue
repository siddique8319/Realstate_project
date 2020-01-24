<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <p style="color:green">{{msg}}</p>
                      <form  @submit.prevent="updatePost">
                         <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Commission Type</label>
                            <select class="form-control" name="commission_type"   v-model="form.commission_type" id="exampleFormControlSelect1" >
                              <option  v-for="type in types" :key="type.id" v-bind:value="type.commission_type">{{type.commission_type}}</option>
                             
                            </select>
                            </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Commission</label>
                             <input  class="form-control" id="exampleInputFirstName" placeholder="Commission Entry"  v-model="form.com" type="text" name="com" :class="{ 'is-invalid': form.errors.has('com') }" >
                              <has-error :form="form" field="com"></has-error>
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
                          <th>Commission Type</th>
                           <th>Commision</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="commission in commissions" :key="commission.id">
                          <td>{{ commission.id }}</td>
                           <td>{{ commission.commission_type }}</td>
                          <td>{{ commission.com }}</td>
                          <td>
                          <router-link :to="{name: 'editCommissionEntry', params: { id: commission.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                           <button  class="btn btn-danger" @click.prevent="deletePost(commission.id)"><i class=" fa fa-trash"></i>Delete</button></td>                       </tr>
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
          com:'',
             }),
          types:[],
          commissions:[],
          msg:''
        }
    },
   created() {
      let urr = `/post/editCommissionEntry/${this.$route.params.id}`;
      let uri = '/api/commissionType';
      let url='/api/commissionEntry';
      this.axios.get(uri).then(response => {
      this.types = response.data.data;
      });
      this.axios.get(url).then(response => {
      this.commissions = response.data.data;
      });
      this.axios.get(urr).then((response) => {
      this.form.fill(response.data)
      });
    },
    methods: {

         updatePost() {
          let uri = `/post/updateCommissionEntry/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'commissionEntry'});
          });
        } 
    }
  }
</script>
