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
                            <select class="form-control" name="menu"   v-model="form.menu" id="exampleFormControlSelect1" >
                              <option  v-for="menu in menus" :key="menu.id" v-bind:value=menu.menu>{{menu.menu}}</option>
                             
                            </select>
                            </div>  

                        </div>
                        <div class="row">
                        <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select Sub Menu</label>
                            <select class="form-control" name="sub_menu"  v-model="form.sub_menu" id="exampleFormControlSelect1" >
                              <option  v-for="submenu in submenus" :key="submenu.id" v-bind:value=submenu.sub_menu>{{submenu.sub_menu}}</option>
                             
                            </select>
                            </div>  

                        </div>
                         <div class="row">
                        <div class="form-group"  >
                            <label for="exampleFormControlSelect1">Select User</label>
                            <select class="form-control"  name="user_role" v-model="form.user_role" id="exampleFormControlSelect1" >
                              <option   v-bind:value=1>Admin</option>
                              <option   v-bind:value=2>Staff</option>
                              <option   v-bind:value=3>Customer</option>
                            </select>
                            </div>  

                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-control-default">
                              <label for="exampleInputFirstName">Url</label>
                            <input  class="form-control" id="exampleInputFirstName" placeholder="Sub Menu Entry"  v-model="form.url" type="text" name="url" :class="{ 'is-invalid': form.errors.has('url') }" >
                              <has-error :form="form" field="url"></has-error>
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
                              <th>Sub_menu</th>
                              <th>Url</th>
                              <th>User</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="sub in subs" :key="sub.id">
                              <td>{{ sub.id }}</td>
                              <td>{{ sub.menu }}</td>
                              <td>{{ sub.sub_menu }}</td>
                              <td>{{ sub.url }}</td>
                              <td>{{ sub.user_role }}</td>
                               <td>{{ sub.status }}</td>
                              <td>
                               <router-link :to="{name: 'editpermissionSubmenu', params: { id: sub.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                               <button  class="btn btn-danger" @click.prevent="deletePost(sub.id)"><i class=" fa fa-trash"></i>Delete</button>
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
          sub_menu:'',
          url:'',
          user_role:''
        }),
         subs:[],
        menus:[],
        submenus:[],
         msg: '',
        }
    },
   created() {
          let urr = `/post/editPermissionSubMenu/${this.$route.params.id}`;
      let uri = '/api/submenu';
       let ur = '/api/menu';
       let u = '/api/permissionSubmenu';
      this.axios.get(uri).then(response => {
      this.submenus = response.data.data;
      
      });
       this.axios.get(ur).then(response => {
      this.menus = response.data.data;
      
      });
        this.axios.get(u).then(response => {
      this.subs = response.data.data;
      
      });
       this.axios.get(urr).then((response) => {
      this.form.fill(response.data)
      });
    },
    methods: {
       
         updatePost() {
          let uri = `/post/updatePermissionSubMenu/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'permissionSubmenu'});
          });
        } 
    }
  }
</script>
