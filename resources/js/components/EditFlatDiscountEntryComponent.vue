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
                              <label for="exampleInputFirstName">Title</label>
                             <input  class="form-control" id="exampleInputFirstName" placeholder="Discount Title"  v-model="form.title" type="text" name="title"  >
                              
                            </div>
                          </div>

                        </div>
                        <div class="form-group">
                         <label for="exampleFormControlFile1">Upload Image</label>
                         <input type="file" class="form-control-file" id="exampleFormControlFile1" @change="changeImage($event)"  name="image">
                          <img :src="form.image" name="image" class="img-responsive" height="70" width="90">
                        </div>
                       
                         <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                        </div>

                   <div class="table-responsive">
                        <table data-toggle="data-table" class="table table-responsive" cellspacing="1" width="200%">
                          <thead style="background:#e4e6ed ">
                            <tr>
                              <th>ID</th>
                              <th>Title</th>
                              <th>Image</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="discount in discounts" :key="discount.id">
                              <td>{{ discount.id }}</td>
                              <td>{{ discount.title }}</td>
                               <td>  <img :src="'/images/'+discount.image" class="img-responsive" height="70" width="90"></td> 
                              <td>
                               <router-link :to="{name: 'editdiscountentry', params: { id: discount.id }}" class="btn btn-primary"><i class=" fa fa-edit"></i>Edit</router-link>
                               <button  class="btn btn-danger" @click.prevent="deletePost(discount.id)"><i class=" fa fa-trash"></i>Delete</button>
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
          image:'',   
          title:'',
        }),
        discounts:[],
         msg: '',
        }
    },
   created() {
        let urr = `/post/editFlatDiscount/${this.$route.params.id}`;
      let uri = '/api/flatDiscount';
       this.axios.get(urr).then((response) => {
      this.form.fill(response.data)
      });
      this.axios.get(uri).then(response => {
      this.discounts = response.data.data;
      
      });
    },
    methods: {
         changeImage(event) {

                    let file = event.target.files[0];
                    let reader = new FileReader();
                    reader.onload = event => {
                     this.form.image = event.target.result;
                     console.log( event.target.result)
                    };

                    reader.readAsDataURL(file);
        
            },
     
    updatePost() {
          let uri = `/post/updateFlatDiscount/${this.$route.params.id}`;
          this.axios.post(uri, this.form).then((response) => {
          this.$router.push({name: 'discountentry'});
          });
        } 
    }
  }
</script>
