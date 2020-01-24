<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form  @submit.prevent="updatePost">
                        <div class="row">
                        <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Menu</label>
                            <select class="form-control" name="menu"  v-model="form.menu" id="exampleFormControlSelect1" >
                              <option  v-for="menu in menus" :key="menu.id" v-bind:value=menu.menu>{{menu.menu}}</option>
                             
                            </select>
                            </div>  

                        </div>
                          <div class="row">
                        <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select User</label>
                            <select class="form-control" name="user_role"   v-model="form.user_role" id="exampleFormControlSelect1" >
                              <option   v-bind:value=1>Admin</option>
                              <option   v-bind:value=2>Staff</option>
                              <option   v-bind:value=3>Customer</option>
                            </select>
                            </div>  

                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">User Role</label>
                            <h5>1.ADMIN</h5>
                            <h5>2.STAFF</h5>
                            <h5>3.CUSTOMER</h5>
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
                              <th>User</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="permission in permissions" :key="permission.id">
                              <td>{{ permission.id }}</td>
                              <td>{{ permission.menu }}</td>
                              <td>{{ permission.user_role }}</td>
                               <td>{{ permission.status }}</td>
                              <td>
                               <router-link :to="{name: 'editpermissionmenu', params: { id: permission.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                               <button  class="btn btn-danger" @click.prevent="deletePost(permission.id)"><i class=" fa fa-trash"></i>Delete</button>
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
          menu :'',   
          user_role:'',
        }),
        permissions:[],
        menus:[],
         msg: '',
        }
    },
   created() {
      let urr = `/post/editPermissionMenu/${this.$route.params.id}`; 
      let uri = '/api/permissionmenu';
       let ur = '/api/menu';
      this.axios.get(uri).then(response => {
      this.permissions = response.data.data;
       });
        this.axios.get(urr).then((response) => {
      this.form.fill(response.data)
      });  
       this.axios.get(ur).then(response => {
      this.menus = response.data.data;
      
      });
    },
    methods: {
          updatePost() {
          let uri = `/post/updatePermissionMenu/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'permissionmenu'});
          });
        } 
    }
  }
</script>
