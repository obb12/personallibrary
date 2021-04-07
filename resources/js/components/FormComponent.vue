<template>
    <div class="container">
    <form  method="post" id="commentTest" class="border">
      <h4>Test post to /api/books/{bookid}</h4>
      <label for="idinputtest">BookId to comment on</label>
      <input v-model="id" type="text" name="id" value="" id="idinputtest"><br>
      <label for="comment">Comment</label>
      <input  v-model="comment" type="text" id="comment" name="comment" value=""><br>
      <input @click.prevent="formclicked()" type="submit" value="Submit">
    </form>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
          formclicked(){
          
          axios.post('/api/books/' + this.id, {
    comment:this.comment
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });
          }
        }
    }
</script>
