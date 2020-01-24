<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form  @submit.prevent="updatePost">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Menu</label>
                             <input  class="form-control" id="exampleInputFirstName" placeholder="Menu Entry"  v-model="form.menu" type="text" name="menu" :class="{ 'is-invalid': form.errors.has('menu') }" >
                              <has-error :form="form" field="menu"></has-error>
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
                              <th>Menu</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="mnu in menus" :key="mnu.id">
                              <td>{{ mnu.id }}</td>
                              <td>{{ mnu.menu }}</td>
                               <td>
                               <router-link :to="{name: 'editMenu', params: { id: mnu.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                               <button  class="btn btn-danger" @click.prevent="deletePost(mnu.id)"><i class=" fa fa-trash"></i>Delete</button>
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
          menu:'',   
             }),
         menus:[],
         msg: '',
        }
    },
   created() {
      let urr = `/post/editMenu/${this.$route.params.id}`; 
      let uri = '/api/menu';
      this.axios.get(uri).then(response => {
      this.menus = response.data.data;
       });
       this.axios.get(urr).then((response) => {
      this.form.fill(response.data)
      });  
    },
    methods: {
       updatePost() {
          let uri = `/post/updateMenu/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'menu'});
          });
        } 
    }
  }
</script>
