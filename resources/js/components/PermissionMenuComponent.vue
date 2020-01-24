<template>

    <div class="row" data-toggle="isotope">
              <div class="item col-xs-12 col-md-9" style="width: 610px">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <h4 style="color:green">{{msg}}</h4>
                      <form  @submit.prevent="add">
                        <div class="row">
                        <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Menu</label>
                            <select class="form-control"   v-model="form.menu" id="exampleFormControlSelect1" >
                              <option  v-for="menu in menus" :key="menu.id" v-bind:value=menu.menu>{{menu.menu}}</option>
                             
                            </select>
                            </div>  

                        </div>
                          <div class="row">
                        <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select User</label>
                            <select class="form-control"   v-model="form.user_role" id="exampleFormControlSelect1" >
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
                              <th>Permission</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="permission in permissions" :key="permission.id">
                              <td>{{ permission.id }}</td>
                              <td>{{ permission.menu }}</td>
                              <td v-if="permission.user_role==1">ADMIN</td>
                               <td v-else-if="permission.user_role==2">STAFF</td>
                                <td v-else>CUSTOMER</td>
                               <td v-if="permission.status==0">                                             
                               <button  type="button" class="btn btn-success waves-effect waves-light" v-on:click="editStatus(permission.id)">Active</button>                             
                                </td>
                                <td v-else>
                                <button type="button" class="btn btn-danger waves-effect waves-light" v-on:click="canclePermission(permission.id)"><i class="mdi mdi-close"></i>Deactive</button>                             
                                </td>
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
      let uri = '/api/permissionmenu';
       let ur = '/api/menu';
      this.axios.get(uri).then(response => {
      this.permissions = response.data.data;
      
      });
       this.axios.get(ur).then(response => {
      this.menus = response.data.data;
      
      });
    },
    methods: {
        add(){
         this.form.post('/index/permissionmenu-entry-create')
         .then(response => {
         this.msg= 'Your Data has been saved successfully!!!';
         let uri = '/api/permissionmenu';
         this.axios.get(uri).then(response => {
         this.permissions = response.data.data;
              });  
          })
          this.form.reset();
         }, 
    
     deletePost(id)
      {
        let uri = `/index/deletePermissionMenu/${id}`;
        this.axios.delete(uri).then(response => {
          this.msg= 'Your Data has been deleted successfully!!!';   
         let uri = '/api/permissionmenu';
         this.axios.get(uri).then(response => {
         this.permissions = response.data.data;
          });  
        this.posts.splice(this.posts.indexOf(id), 1);
        });
        //console.log('ajksdf'); 
      },
       editStatus(id)
      {
        let uri = `/status/editMenuStatus/${id}`;
         this.axios.post(uri, this.form).then((response) => {
         let uri = '/api/permissionmenu';
         this.axios.get(uri).then(response => {
         this.permissions = response.data.data;
          }); 
          });
         },
     canclePermission(id)
      {
        let uri = `/status/canclePermission/${id}`;
        this.axios.post(uri, this.form).then((response) => {
        let uri = '/api/permissionmenu';
        this.axios.get(uri).then(response => {
        this.permissions = response.data.data;
          }); 
          });
         },
    
    }
  }
</script>
