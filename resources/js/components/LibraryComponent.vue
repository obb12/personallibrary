<template>
    <div>
    <h2>Sample Front end</h2>
    <form>
    <input v-model="title" type="text" placeholder="New Book Title">
    <button @click.prevent="formclicked()" type="submit">Submit New Book</button>
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
          axios.post('/api/books', {
    title:this.title
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
